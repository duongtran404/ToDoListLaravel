@extends('ToDoList.layout')
@section('content')
    
<form method="POST" action="{{route('ToDoList.store')}}">
    @csrf
    <div class="mx-auto mt-5" style="width: 700px;">
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="description">
            @error('description')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Begin date</span>
            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="begin_date">
            @error('begin_date')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">End date</span>
            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="end_date">
            @error('end_date')
                <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>
        <button class="btn btn-dark" type="submit">Save</button>
    </div>
</form>
@endsection
