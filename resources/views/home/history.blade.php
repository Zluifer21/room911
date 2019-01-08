  @if(count($logs))
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
                <td>{{$log->result()}}</td>
            </tr>
          @endforeach
            </tbody>
      </table>
      @else
    <div class="empty center" style="margin-top: 100px" >
      <i class="material-icons" style=" display: block;font-size: 80px;">toc</i>
      No se encontró resultados.
    </div>
    @endif
