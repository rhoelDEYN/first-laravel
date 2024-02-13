<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\TodoList;
use Illuminate\View\View;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $todo_list = TodoList::paginate(5);
        return view ('todo_list.index')->with('todo_list', $todo_list);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('todo_list.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        TodoList::create($input);
        return redirect('todo_list')->with('flash_message', 'Task Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $todo_list = TodoList::find($id);
        return view('todo_list.show')->with('todo_list', $todo_list);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $todo_list = TodoList::find($id);
        return view('todo_list.edit')->with('todo_list', $todo_list);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $todo_list = TodoList::find($id);
        $input = $request->all();
        $todo_list->update($input);
        return redirect('todo_list')->with('flash_message', 'Task Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        TodoList::destroy($id);
        return redirect('todo_list')->with('flash_message', 'Task Deleted!');
    }
}
