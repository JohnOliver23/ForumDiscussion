<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> {{config('app.name')}}</title>
		<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" >
         
</head>
<body>
	<nav>
	  <div class="nav-wrapper menu">
	    <a href="" class="brand-logo">DiscussionForum</a>
	    <ul id="nav-mobile" class="right hide-on-med-and-down">
	      <li><a href="{{ url('/login') }}">Login</a></li>
	      <li><a href="{{ url('/register') }}">Register</a></li>
	    </ul>
	  </div>
	</nav>
	   @yield('content')
</body>
</html>