@extends('todo.app')
@section('content')
    <h1>Todo List</h1>
            <div class="well">
                <h3>{{$todo->text}}<span class="label label-danger">{{$todo->due}}</span></h3>
                <p>{{$todo->body}}</p>

            </div>
    <br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
    <a href="{{URL::to('/')}}" class="btn btn-info">Go Back</a>


@endsection