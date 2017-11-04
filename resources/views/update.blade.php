@extends('layout')


@section('content')
<hr>
    <div class="row">
    <div class="col-lg-44 ">
        <form action="{{route('todo.save',['id'=>$todo->id])}}" method="post">
              {{csrf_field() }}
            <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Please update your selection">
        </form>
    </div>
    </div>
    <hr>

@stop