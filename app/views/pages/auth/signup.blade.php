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
		    <input name="email" type="email" class="form-control" placeholder="email@example.com" value="{{{ Input::old('email') }}}" required autofocus>
		    <input name="password" type="password" class="form-control" placeholder="Password" required>
		    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm password" required>
		    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"><br>
		    <button class="btn btn-default btn-block" type="submit">Sign up</button>
		{{ Form::close() }}
	</div>
</div>
@stop
