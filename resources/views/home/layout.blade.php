<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Room 911</title>
  </head>
  <body>
    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li class="divider"></li>
<li>
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
</li>

</ul>
    <nav>
      <div class="nav-wrapper">
        {{ date('Y-m-d H:i:s') }}
       <ul id="nav-mobile" class="right hide-on-med-and-down">


       <li><a href="{!! route('home') !!}">Home</a></li>
       <li><a href="{!! url('access_room') !!}">Access Room</a></li>

        </ul>
        <ul class="right">
          <!-- Dropdown Trigger -->
          <li> <a class='dropdown-button' data-beloworigin="true" href='#' data-activates='dropdown1'>
            @if( Auth::check() )
            {{ Auth::user()->name }}
            @endif
        <i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>

      @yield('content')

 <div id="modal1" class="modal">
   <div class="modal-content"></div>
 </div>
  </body>
  <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/materializefuncions.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/ajax_actions.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/initial_actions.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/alert.js') }}"></script>
</html>
