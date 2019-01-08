<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Departament;
use App\Log;
use DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(15);
        $returnHTML = view('home.table')->with('employees', $employees)->render();
        return response()->json(array('success' => true, 'data'=>$returnHTML));
    }

    public function create()
    {   $departaments=Departament::pluck('name','id')->prepend('Select', null);
        return view('home.form',compact('departaments'));
    }


    public function store(Request $request)
    {
      try{
        $input = $request->all();
        $employed = new Employee;
        $employed->fill($input);
        $employed->save();
        return response()->json(array('success' => true, 'message'=>'success','url'=>'employees'));
      }
      catch(\Exception $e){

         return $e->getMessage();
      }
    }

    public function edit($id)
    {     $employed=Employee::find($id);
          $departaments=Departament::pluck('name','id')->prepend('Select', null);
          return view('home.form',compact('departaments','employed'));
    }


    public function update(Request $request, $id)
    {
      try{
        $input = $request->all();
        $employed=Employee::find($id);
        $employed->fill($input);
        $employed->save();
        return response()->json(array('success' => true, 'message'=>'success'));
      }
      catch(\Exception $e){

         return response()->json(array('fail' => true, 'message'=>$e->getMessage()));
      }
    }

    public function destroy($id)
    {
      try{
        $employed=Employee::find($id)->delete();

        return response()->json(array('success' => true, 'message'=>'success'));
      }
      catch(\Exception $e){
         return response()->json(array('success' => false, 'error'=>$e->getMessage()));
      }
    }

    public function access_room(Request $request)
    {
      $input = $request->all();
      if ($request->isMethod('get'))
        return view('home.access_room');
        else{
            $employed=Employee::where('employed_id',$input['employed_id'])->get();
            if (!$employed->isEmpty()) {
              if ($employed[0]['access_room']==0)
              {
                try {
                  $log = new Log();
                  $log->employee_id=$employed[0]['id'];
                  $log->success=$employed[0]['access_room'];
                  $log->save();
                  return response()->json(array('success' => true, 'message'=>'denied permission'));

                } catch (\Exception $e) {
                  return response()->json(array('success' => true, 'message'=>$e->getMessage()));
                }
              }
              else
              {
                try {
                  $log = new Log();
                  $log->employee_id=$employed[0]['id'];
                  $log->success=$employed[0]['access_room'];
                  $log->save();
                  return response()->json(array('success' => true, 'message'=>'permission granted'));

                } catch (\Exception $e) {
                  return response()->json(array('success' => true, 'message'=>$e->getMessage()));
                }
              }

            }else
            {
              try {
                $log = new Log();
                $log->observations=$input['employed_id'];
                $log->save();
                return response()->json(array('success' => true, 'message'=>'employed dont exist'));

              } catch (\Exception $e) {
                return response()->json(array('success' => true, 'message'=>$e->getMessage()));
              }
            }


        }
    }

    public function filter(Request $request)
    {

            $query = Employee::query();
            $firstname = $request->firstname;
            if (!is_null($firstname)) {
                $query = $query->where('firstname',$firstname);
            }
            if (!is_null($request->lastname)) {
                $query = $query->where('lastname',$request->lastname);
            }
            if (!is_null($request->employed_id)) {
                $query = $query->where('employed_id',$request->employed_id);
            }
            if (!is_null($request->departament_id)) {
                $query = $query->where('departament_id',$request->departament_id);
            }
            try {
              $employees = $query->paginate(15);
              $returnHTML = view('home.table')->with('employees', $employees)->render();
              return response()->json(array('success' => true, 'data'=>$returnHTML));

            } catch (\Exception $e) {
              return response()->json(array('success' => true, 'data'=>$e->getMessage()));
            }
            }
}
