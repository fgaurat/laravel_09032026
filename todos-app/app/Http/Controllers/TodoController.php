<?php

namespace App\Http\Controllers;

use App\Events\TodoCreated;
use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {

        // $validated = $request->validate([
        //     'title' => 'required|max:5',
        //     // 'completed'=>'nullable'
        //     'completed' => 'boolean',

        // ]);
        // $validated['completed'] = isset($validated['completed']) && !empty($validated['completed']) ? $validated['completed']:false;
        // $validated['completed'] = $request->boolean('completed');

        $validated = $request->validated();

        $todo = Todo::create($validated);

        TodoCreated::dispatch($todo);
        return redirect()->route('todo.index')->with("status","Todo created !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        // $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('todo.index')->with("status","Todo deleted !");
    }
}
