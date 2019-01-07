<div class="">
   @if(isset($employed))
      {!! Form::model($employed,['route'=>['employees.update',$employed->id],'method'=>'PUT','id'=>'frm']) !!}
@else
    {!! Form::open(['route' => 'employees.store','id'=>'frm']) !!}
    <div class="input-field col s12 l4">
     {!!  Form::select('access_room', ['1' => 'Enable', '0' => 'Desable'], null, ['placeholder' => 'Choose']) !!}
     <label for="icon_prefix">access_room</label>
    </div>
@endif
  <h5 class="modal-title">{{isset($employed)?'Edit':'New'}} Employed</h5>
   <div class="row">
     <div class="input-field col s12 l4">
       {!! Form::select('departament_id', $departaments, old('afectaciones'), array()) !!}
       <label for="icon_prefix">Departament</label>
     </div>

     <div class="input-field col s12 l4">
       {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
      <label for="icon_prefix" class="active">First Name </label>
     </div>
     <div class="input-field col s12 l4">
       {!! Form::text('middlename', null, ['class' => 'form-control']) !!}
        <label for="icon_prefix" class="active">Middle Name</label>
     </div>

     <div class="input-field col s12 l4">
      {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
      <label for="icon_prefix" class="active">Lastname</label>
    </div>

    <div class="input-field col s12 l4">
      {!! Form::text('employed_id', null, ['class' => 'form-control']) !!}
     <label for="icon_prefix" class="active">id</label>
   </div>
 </div>
 <div class="input-field">
   <button class="btn waves-effect waves-light" >Save</button>
 </div>
 {!! Form::close() !!}
</div>
<div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red">close</a>
</div>
<script >
$(document).ready(function(){
  $('select').material_select();
   });
</script>
