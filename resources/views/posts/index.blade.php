@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="well">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img style="height: 200px; width: 400px;" class="img-thumbnail" src="{{url('/public/storage/cover_image/'.$post->cover_image)}}" alt="">
					</div>
					<div class="col-md-8 col-sm-8">
						<h3><a href="{{url('/posts/'.$post->id)}}">{{$post->title}}</a></h3>
				<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
					</div>
				</div>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found...........</p>
	@endif
@endsection