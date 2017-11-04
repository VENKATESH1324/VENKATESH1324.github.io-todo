@extends('layout')


@section('content')

    <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form action="/create/todo" method="post">
              {{csrf_field() }}
            <input type="textArea" class="form-control input-lg" name="todo" placeholder="please enter your tasks for today !">
        </form>
    </div>
    </div>
    <hr>
    @foreach($todos as $todo)
        {{ $todo->todo }} <a href="{{ route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">X</a>
        <a href="{{ route('todo.update',['id'=>$todo->id])}}" class="btn btn-info btn-xs">update</a>
        @if(!$todo->completed)
            <a href="{{route('todos.completed',['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as Complete</a>
        @else
            <span class="text-success">Completed!</span>
        @endif
        <hr>
    @endforeach
@stop