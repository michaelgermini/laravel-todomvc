@extends('layouts.app')

@section('content')

 <h1>Index</h1>

@foreach($task as $task)

{{ $task['name'] }}

<div class="well">
    <ul>
        <a href="{{ route ('tasks.show', $task) }}">{{ $task['name'] }}</a>
    </ul>
</div>
        
@endforeach

<form method="POST" action="{{ route('tasks.store') }}" >
    
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control" id="name" name="name"/>
    </div>

    
    <div class="button">
        <button type="submit">Envoyer votre task</button>
    </div>
</form>
@stop