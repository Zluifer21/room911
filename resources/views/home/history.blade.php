<table class="highlight responsive-table" >
          <thead>
              <tr>
              <th>date</th>
              <th>success</th>
              </tr>
          </thead>
          <tbody>
        @foreach($logs as $log)
            <tr>
                <td>{{$log->created_at}}</td>
                <td>{{$log->success}}</td>
            </tr>
          @endforeach
            </tbody>
      </table>
