@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<h1>Page</h1>

<p>Hello, {{ $name }}.</p>

<p>The current UNIX timestamp is {{ time() }}.</p>




@stop