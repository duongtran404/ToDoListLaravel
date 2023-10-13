<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        <!-- table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table {
            counter-reset: tableCount;     
        }-->
        .counterCell:before {              
            content: counter(tableCount); 
            counter-increment: tableCount; 
        }
        table, th, td {
             border: 1px solid white;
             border-collapse: collapse;
        }
        th, td {
             background-color: #96D4D4;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOLIST by LARAVEL</title>
</head>
<body>
    <h1>LIST TASK</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Description</th>
            <th>Begin_date</th>
            <th>End_date</th>
            <th>Status</th>
            <th>CRUD</th>
        </tr>
        @foreach ($data as $value)
            <tr>
                <td class="counterCell" ></td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->begin_date }}</td>
                <td>{{ $value->end_date }}</td>
                <td>{{ $value->status}}</td>
                <td><form action="{{ route('ToDoList.destroy',$value->id) }}" method="post" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bản ghi này?');" >
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" >Delete</button>
                </form>
                <a href="{{route('ToDoList.edit',$value->id)}}"><button>Edit</button></a>
                </td>
            </tr>
        @endforeach
    </table>
    <button><a href="/ToDoList/create">new task</a></button>
    
</body>
</html>