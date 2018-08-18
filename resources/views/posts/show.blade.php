@extends('layouts.app')

@section('content')
	<h1>{{$post->title}}</h1>
	<img style="height: 200px; width: 400px;" class="img-thumbnail" src="{{url('/public/storage/cover_image/'.$post->cover_image)}}" alt="">
	<br><br>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-primary">Edit</a>
			{!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('DELETE', ['class'=>'btn btn-danger'])}}
			{!!Form::close()!!}
		@endif
	@endif
	<hr>
	<a href="{{url('/posts')}}" class="btn btn-success">Go Back</a>
@endsection
