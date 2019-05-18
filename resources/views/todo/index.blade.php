@extends('todo.app')
@section('content')
    <h1>Todo List</h1>
    @if(count($todo) > 0)
        @foreach($todo as $result)
            <div class="well">
                <h3><a href="{{URL::to('/todo/'.$result->id.'')}}">{{$result->text}}</a>  <span class="label label-danger">{{$result->due}}</span></h3>

            </div>

        @endforeach
    @endif
@endsection