<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Task</title>
</head>
<body>
    <h1>New Task</h1>
    <form method="POST" action="{{route('ToDoList.store')}}">
        @csrf
        <label for="description">Description: </label>
        <input type="text" id="description" name="description" required><br>

        <label for="begin_date">Begin Date: </label>
        <input type="date" id="start_date" name="begin_date" required date><br>

        <label for="end_date">End Date: </label>
        <input type="date" id="end_date" name="end_date" required><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>