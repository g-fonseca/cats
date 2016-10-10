@extends('layouts.app')

@section('content')
<div class="row home">
	<div class="col-xs-12">
		
		<div class="jumbotron text-center">
		<a href="{{ url('login') }}" class="btn btn-primary pull-right">LOGIN</a>
			<h1>Cats are waiting for you</h1>
			<a href="{{ url('register') }}" class="btn btn-primary btn-lg">Get Started</a>
		</div>

	</div>
</div>

@stop