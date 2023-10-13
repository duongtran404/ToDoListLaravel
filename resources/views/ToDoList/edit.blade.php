<h1>Edit form</h1>
<form action="{{route('ToDoList.update', ['ToDoList' => $id])}}" method="POST">

    @method('put')
    @csrf

    <label for="description">Description: </label>
    <input type="text" id="description" name="description" required value="{{$toDoList->description}}"><br>

    <label for="begin_date">Begin Date: </label>
    <input type="date" id="start_date" name="begin_date" required value="{{$toDoList->begin_date}}"><br>

    <label for="end_date">End Date: </label>
    <input type="date" id="end_date" name="end_date" required value="{{$toDoList->end_date}}"><br>

    <label for="status">Status</label>
    <select name="status">
        {{$toDoList->status}}
        <option value="not started">not started</option>
        <option value="done">done</option>
    </select>
    <br>

    <button>Save</button>
</form>
