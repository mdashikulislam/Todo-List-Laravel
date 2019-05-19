@extends('todo.app')
@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action' => ['TodoController@create'],'method'=>'POST']) !!}
    {{Form::bsText('text')}}
    {{Form::bsTextArea('body')}}
    {{Form::bsText('due')}}
    {{Form::bsSubmit('Submit',['class'=>'btn btn-info'])}}
    {!! Form::close() !!}
    @endsection