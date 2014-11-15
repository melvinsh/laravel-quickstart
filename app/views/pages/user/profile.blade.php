@extends('layouts.master')

@section('content')

<h1>User #{{{ $user->id }}}</h1>
<p>This user owns <strong>{{{ $user->echoRecordCount() }}}</strong>.</p>

<hr>

<p>This is where you will show information about the user. Right now there's not much to show..</p>

@stop