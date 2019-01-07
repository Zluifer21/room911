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
    <nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="{{ url('access_room') }}">Access Room </a></li>
      <li><a href="collapsible.html">JavaScript</a></li>
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
