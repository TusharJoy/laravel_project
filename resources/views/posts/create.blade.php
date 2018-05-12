@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
	   <h1><bold>Publish a Post</bold></h1>

        <form method="POST" action="/posts">
	           {{ csrf_field() }}

            
            <div class="form-group">
                <label for="tittle">Your title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control"></textarea>
            </div>

            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">publish</button>
            </div>

            @include('layouts.validate')
        
        </form>


    </div>
    
@endsection 