@extends('layouts.app')

@section('content')



<h1>Contact Page</h1>


<ul>

@foreach($results as $result)

<li>{{$result}}</li>

@endforeach

</ul>
@endif
@stop