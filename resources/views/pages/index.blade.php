@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Welcome to Laravel</h1>
    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-lg btn-primary" href="{{ url('/login') }}" role="button">Login</a> <a class="btn btn-lg btn-success" href="{{ url('/register') }}" role="button">Register</a></p>
</div>
@endsection
