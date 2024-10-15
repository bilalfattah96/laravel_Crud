<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name"> <br> <br>
        <label for="">Description</label>
        <input type="text" name="description"> <br> <br>
        <label for="">Status</label>
        <input type="checkbox" name="status" checked> checked = available , unchecked = not available <br> <br>
        <button type="submit"> Add Category</button>
    </form>
</body>
</html>