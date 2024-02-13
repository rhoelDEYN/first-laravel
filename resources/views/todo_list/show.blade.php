@extends('todo_list.layout')
@section('content')


<div class="card">
    <div class="card-header fw-bold">Todo List Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Task : {{ $todo_list->task }}</h5>
            <p class="card-text">Description : {{ $todo_list->description }}</p>
            @if ($todo_list->status == 0)
                @php
                    $todo_list->status = 'Pending';
                @endphp

            @else
                @php
                    $todo_list->status = 'Done';
                @endphp

            @endif
            <p class="card-text">Status : {{ $todo_list->status }}</p>
        </div>

        </hr>
        <a href="{{ url('/todo_list') }}" class="btn btn-outline-dark shadow-none btn-md mt-3 mx-2 shadow-none">
            <i class="fa fa-plus" aria-hidden="true"></i> Back
        </a>
    </div>
</div>
