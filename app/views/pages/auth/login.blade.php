@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<h1 class="page-header">Sign in</h1>

		@if($alert = Session::get('error'))
		  <div class="alert alert-danger">
		    {{{ $alert }}}
		  </div>
		@endif

		<form class="form-signin" role="form" action="/login" method="post">
		    <input name="email" type="email" class="form-control" value="demo@demo.local" required autofocus>
		    <input name="password" type="password" class="form-control" value="demo!" required>
		    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
		    <br>
		    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</div>
@stop