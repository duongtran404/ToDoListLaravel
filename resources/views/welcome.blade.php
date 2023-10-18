@extends('ToDoList.layout')
@section('content')
    
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Description</th>
            <th scope="col">Begin date</th>
            <th scope="col">End date</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $value)
        <tr>
            <td scope="row" class="counterCell" ></td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->begin_date }}</td>
            <td>{{ $value->end_date }}</td>
            <td>{{ $value->status}}</td>
            <td><form action="{{ route('ToDoList.destroy',$value->id) }}" method="post" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bản ghi này?');" >
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn btn-dark" >Delete</button>
                </form>
                <a href="{{route('ToDoList.edit',$value->id)}}"><button class="btn btn-dark mt-1">Edit</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/ToDoList/create"><button class="btn btn-dark">new task</button></a>
@endsection


