@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')

@section('content')

<h1>Contact Page</h1>

@if (count($people))
<ul>

@foreach($people as $person)

<li>{{$person}}</li>

@endforeach

</ul>
@endif

@stop

{{-- This comment will not be present in the rendered HTML --}}