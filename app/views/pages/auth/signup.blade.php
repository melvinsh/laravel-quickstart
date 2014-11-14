@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<h1 class="page-header">Sign up</h1>

		@if($errors->first())
		  <div class="alert alert-danger">
		    {{{ $errors->first() }}}
		  </div>
		@endif

		<form class="form-signin" role="form" action="/signup" method="post">
		    <input name="email" type="email" class="form-control" placeholder="email@example.com" value="{{{ Input::old('email') }}}" required autofocus>
		    <input name="password" type="password" class="form-control" placeholder="Password" required>
		    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm password" required>
		    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
		    <br>
		    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</div>
@stop