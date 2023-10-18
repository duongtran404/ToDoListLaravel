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
    public function store()
    {
        $validated = request()->validate([
            'description'   => 'required',
            'begin_date'    => 'required|date|before:end_day',
            'end_date'      => 'required|date|after:begin_date',
        ]);
        ToDoList::create([ 
            'description' => $validated['description'],
            'begin_date' => $validated['begin_date'],
            'end_date' => $validated['end_date']
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
    public function update($id)
    {
        $validated = request()->validate([
            'description'   => 'required',
            'begin_date'    => 'required|date|',
            'end_date'      => 'required|date|',
            'status'        => 'required'
        ]);
        ToDoList::where('id', $id)->update([
            'description'   => $validated['description'],
            'begin_date'    => $validated['begin_date'],
            'end_date'      => $validated['end_date'],
            'status'        => $validated['status'],
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
