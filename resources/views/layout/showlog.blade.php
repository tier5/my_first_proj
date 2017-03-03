<!DOCTYPE html>
<html>
<head>
	<title>show</title>
</head>
<body>
you are successfully registered
	 @if(Session::has('success'))
	<div class="alert-success"role="alert">
	<strong>success:</strong>{{Session::get('success')}}
	</div>
	@endif
	@if(isset($post))
	<h1>{{$post->title}}</h1>
	<p class="lead">{{$post->body}}</p>
	@endif 
</body>
</html>