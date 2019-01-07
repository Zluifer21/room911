<table class="highlight responsive-table" id="data_table">
          <thead>
              <tr>
              <th>Employed_id</th>
              <th>Departament</th>
              <th>Last name</th>
              <th>Middle name</th>
              <th>First name</th>
              <th>Last acces</th>
              <th>Total access</th>
              <th>Atcions</th>
              </tr>
          </thead>
          <tbody>
        @foreach($employees as $employed)
            <tr>
                <td>{{$employed->employed_id}}</td>
                <td>{{$employed->departaments['name']}}</td>
                <td>{{$employed->lastname}}</td>
                <td>{!!$employed->middlename !!}</td>
                <td>{!! $employed->firstname!!}</td>
                  @if(count($employed->logs))
                  <td>{!! $employed->logs()->latest()->first()->created_at!!} </td>
                  @else
                  <td>no loged</td>
                  @endif
                  <td>{!! $employed->logs->count() !!}</td>
                <td>
                  <a class="waves-effect waves-light btn modal-trigger"  data-source="employees/{{$employed->id}}/edit"  href="#modal1">Update</a>
                  @if($employed->access_room==0)
                  <a href="#" class="waves-effect btn waves-light" onclick="update_confirm({{$employed->id}},{{$employed->access_room}})();">Enable</a>
                  @else
                  <a href="#" class="waves-effect btn waves-light" onclick="update_confirm({{$employed->id}},{{$employed->access_room}})();">Desable</a>
                  @endif
                  <a href="#" class="waves-effect btn waves-light" onclick="delete_confirm({{$employed->id}})();">Delete</a>
                    <a class="waves-effect waves-light btn modal-trigger"  data-source="logs/{{$employed->id}}"  href="#modal1">History</a>
                </td>
            </tr>
          @endforeach
            </tbody>
      </table>
      {{$employees->links()}}
      <script type="text/javascript" src="{{ asset('js/materializefuncions.js') }}"></script>
