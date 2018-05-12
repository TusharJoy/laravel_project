@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">


	<div class="blog-post">
       
    	<h2 class="blog-post-title">{{$post->title}}</h2>
    	<p class="blog-post-meta">{{$post->created_at ->toFormattedDateString()}} by</p>
    	<p>{{$post->body}}</p>
	</div>

	<div class="comments">
		<ul class="list-group">
			
			@foreach($post->comments as $comment)
			
			<li class="list-group-item">
				<strong>
					
					{{$comment->created_at->diffForHumans()}}:&nbsp;

				</strong>
				{{$comment->body}}
				
			</li>

			@endforeach

		</ul>
			<hr>
	<br>
	<br>
		<div class="card">
		<div class="card-block">
			
			<form method="POST" action="/posts/{{ $post->id }}/comments">

				{{ csrf_field() }}
			}
				<div class="form-group">
  				
  					<textarea class="form-control" placeholder="you Comment here" name="body" required>
  					</textarea>
				
				</div>


				<div class="form-group">
					<button type="submit" class="btn btn-secondary">Add Comment</button>
				</div>
		  
			</form>

			@if($errors)
				@include('layouts.validate')
			@endif

		</div>
	</div>	
	</div>



	<nav class="blog-pagination">
		<a class="btn btm-outline-primary" href="#">Older</a>
		<a class="btn btm-outline-secondary-disabled" href="#">Newer</a>
	</nav>

</div>
@endsection 