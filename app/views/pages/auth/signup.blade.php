@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<h1 class="page-header">Sign up</h1>

		@if($errors->first())
		    <div class="alert alert-danger">
		    <button type="button" class="close" data-dismiss="alert">&times;</button>
		        {{{ $errors->first() }}}
		    </div>
		@endif

		{{ Form::open(array('route' => 'post_signup')) }}
		<div class="form-group">
	      <label for="email">E-mail</label>
		  <input name="email" type="email" class="form-control" placeholder="Enter e-mail" value="{{{ Input::old('email') }}}" required autofocus>
		</div>
		<div class="form-group">
	 	   <label for="password">Password</label>
		   <input name="password" type="password" class="form-control" placeholder="Enter password" required>
		</div>
		<div class="form-group">
	  	  <label for="password_confirmation">Confirm password</label>
		  <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm password" required>
		</div>
	    <button class="btn btn-default btn-block" type="submit">Sign up</button>
		{{ Form::close() }}
	</div>
</div>
@stop
