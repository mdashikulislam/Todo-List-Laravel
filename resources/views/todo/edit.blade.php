@extends('todo.app')
@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-primary">Go Back</a>
    <h1>Create Todo</h1>
    {!! Form::open(['action' => ['TodoController@update',$todo->id],'method'=>'POST']) !!}
    {{Form::bsText('text',$todo->text)}}
    {{Form::bsTextArea('body',$todo->body)}}
    {{Form::bsText('due',$todo->due)}}
    {{Form::hidden('_method','PUT')}}
    {{Form::bsSubmit('Submit',['class'=>'btn btn-info'])}}
    {!! Form::close() !!}
@endsection