<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateToDoListRequest;
use App\Models\ToDoList;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ToDoList::all();
        return view('welcome', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ToDoList.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = ToDoList::create([ 
            'description' => $request->input('description'),
            'begin_date' => $request->input('begin_date'),
            'end_date' => $request->input('end_date')
        ]);
        return redirect('ToDoList');
    }

    public function show(ToDoList $toDoList)
    {
        //
    }

    public function edit($id, Request $request)
    {
        $toDoList = ToDoList::find($id);

        return view('ToDoList.edit', compact('id', 'toDoList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $toDoList = ToDoList::where('id', $id)->update([
            'description' => $request->input('description'),
            'begin_date' => $request->input('begin_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status'),
        ]);
        return redirect('ToDoList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $toDoList = ToDoList::find($id);
        $toDoList -> delete();  
        return redirect('ToDoList');
    }
    
}
