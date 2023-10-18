@extends('ToDoList.layout')
@section('content')
    
<form action="{{route('ToDoList.update', ['ToDoList' => $id])}}" method="POST">
    
    @method('put')
    @csrf

    <div class="mx-auto mt-5" style="width: 700px;"> 

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="description" value="{{$toDoList->description}}">
            @error('description')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">begin date</span>
            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="begin_date" value="{{$toDoList->begin_date}}">
            @error('begin_date')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">end date</span>
            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="end_date" value="{{$toDoList->end_date}}">
            @error('end_date')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Status</span>
            <select name="status" class="form-select" aria-label="Default select example">>
                {{$toDoList->status}}
                <option value="done">Done</option>
                <option value="not started">Not started</option>
            </select>
        <br>
        </div>

        <button class="btn btn-dark">Save</button>

    </div>  
</form>

@endsection