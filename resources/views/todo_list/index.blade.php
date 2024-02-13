@extends('todo_list.layout')
@section('content')
    <div class="container">
        <div class="row mx-auto mt-5">

            <div class="col-lg-12 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Todo List</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/todo_list/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="bi bi-plus"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($todo_list as $item)
                                    @if ($item->status == 0)
                                        @php
                                            $item->status = 'Pending';
                                        @endphp
                                    @else
                                        @php
                                            $item->status = 'Done';
                                        @endphp
                                    @endif
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="width:25%">{{ $item->task }}</td>
                                        <td style="width:40%">{{ $item->description }}</td>
                                        <td>{{ $item->status }}</td>

                                        <td>
                                            <a href="{{ url('/todo_list/' . $item->id) }}" title="View Task"><button class="btn btn-info btn-sm"><i class="bi bi-eye"></i> View</button></a>
                                            <a href="{{ url('/todo_list/' . $item->id . '/edit') }}" title="Edit Task"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/todo_list' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete Task" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash"></i> Delete</button>
                                            </form>
                                            {{-- <form method="POST" action="{{ url('/todo_list' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-success btn-sm" title="Done Task" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Done</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
