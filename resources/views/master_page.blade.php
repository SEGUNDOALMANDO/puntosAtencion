<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
{!! HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) !!}
{!! HTML::style('assets/css/SmartSearch/selectize.bootstrap2.css', array('media' => 'screen')) !!}
{!! HTML::style('assets/css/style.css', array('media' => 'screen')) !!}
</head>
<body>
    <div class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Puntos de atencion</a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('logout')}}">Cerrar sesion</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    {!! HTML::script('assets/js/SmartSearch/selectize.min.js') !!}
    {!! HTML::script('assets/js/initial.js') !!}
    @yield('includejs')

</body>
</html>