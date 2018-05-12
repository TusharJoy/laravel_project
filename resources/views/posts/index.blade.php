@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">
	
	@foreach($posts as $post)
		
		@include('posts.post')
	
	@endforeach

	

	<nav class="blog-pagination">
		<a class="btn btm-outline-primary" href="#">Older</a>
		<a class="btn btm-outline-secondary-disabled" href="#">Newer</a>
	</nav>

</div>


@endsection