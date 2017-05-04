@extends('layouts.app')

@section('content')


 
  <a href = "{{ route ('tasks.show', [ 'id' => $task['id'] ]) }}" > {{ $task['name'] }}</a>

@stop