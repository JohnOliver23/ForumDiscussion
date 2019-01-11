  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@include('includes.menu')
  <div class="container">
	<h1 class="center">Posts</h1>
	@if ( count((array)$posts ) > 0)
		@foreach ($posts as $post)
			<div class="well">
			<h3><a href="/posts/{{ $post->id }}">{{$post->titulo}}</a></h3>
			</div>	
		@endforeach	 
		{{$posts->links()}}	
	@else
		<p>No posts found</p> 
	@endif
    </div>	

     <!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
