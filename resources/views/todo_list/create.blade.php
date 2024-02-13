@extends('todo_list.layout')
@section('content')

<div class="card">
    <div class="card-header fw-bold">Add New Task</div>
    <div class="card-body">

        <form action="{{ url('todo_list') }}" method="post">
            {!! csrf_field() !!}
            <label>Task</label></br>
            <input type="text" name="task" id="name" class="form-control"></br>
            <label>Description</label></br>
            <input type="text" name="description" id="address" class="form-control"></br>
            <label>Status</label></br>
            <input type="radio" id="pending" name="status" value="0" checked>
            <label for="pending" class="mx-4">Pending</label>
            <input type="radio" id="done" name="status" value="1">
            <label for="done" class="mx-4">Done</label><br>
            <input type="submit" value="Save" class="btn btn-success mt-3">
            <a href="{{ url('/todo_list') }}" class="btn btn-outline-dark shadow-none btn-md mt-3 mx-2">
                <i class="fa fa-plus" aria-hidden="true"></i> Cancel
            </a>
        </form>

    </div>
</div>

@stop
