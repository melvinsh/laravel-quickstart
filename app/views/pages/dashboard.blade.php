@extends('layouts.master')

@section('content')

@if($alert = Session::get('message'))
    <div class="alert alert-success">
        {{{ $alert }}}
    </div>
@endif

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1>Hello, person!</h1>
    <p>Looks like you managed to get Laravel Quickstart running. Easy, isn't it? You're currently logged in as a <strong>User</strong>. The demo user has a couple of <strong><a href="{{{ route('get_records') }}}">Records</a></strong>. Users can add records too! Each user has a simple <a href="{{{ route('show_profile', Auth::user()->id) }}}">profile</a> and can change their <a href="{{{ route('get_settings') }}}">settings</a> (e-mail/password). <br><br>I hope this helps getting you started! Have fun building your app.</p>
    <br>
    <p><a href="https://github.com/melvinsh/laravel-quickstart" class="btn btn-primary" role="button">Learn more @ GitHub &raquo;</a></p>
</div>

@stop