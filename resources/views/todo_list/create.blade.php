@extends('todo_list.layout')
@section('content')

<div class="card col-6 mx-auto mt-5 shadow-lg">
    <div class="card-header fw-bold">Add New Task</div>
    <div class="card-body">

        <form action="{{ url('todo_list') }}" method="post">
            {!! csrf_field() !!}
            <label>Task</label></br>
            <input type="text" name="task" id="name" class="form-control shadow-none"></br>
            <label>Description</label></br>
            <textarea type="text" name="description" id="address" class="form-control shadow-none"></textarea></br>
            <label>Status</label></br>
            <input type="radio" id="pending" name="status" value="0" checked>
            <label for="pending" class="mx-4">Pending</label>
            <input type="radio" id="done" name="status" value="1">
            <label for="done" class="mx-4">Done</label><br>
            <input type="submit" value="Save" class="btn btn-outline-success mt-3">
            <a href="{{ url('/todo_list') }}" class="btn btn-dark shadow-none btn-md mt-3 mx-2">
                <i class="fa fa-plus" aria-hidden="true"></i> Cancel
            </a>
        </form>

    </div>
</div>

@stop
