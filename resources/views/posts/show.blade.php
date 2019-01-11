@include('menu');

@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>{{$post->titulo}}</h1>
	<div>
		{{$post->body}}
	</div>
	<hr>
	
@endsection