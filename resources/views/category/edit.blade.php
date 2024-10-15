<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('category.update',$category -> id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Name</label>
        <input type="text" name="name" value="{{$category -> name}}"> <br> <br>
        <label for="">Description</label>
        <input type="text" name="description" value="{{$category -> description}}"> <br> <br>
        <label for="">Status</label>
        <input type="checkbox" name="status" {{$category-> status == 1 ? 'checked' : ''}}> checked = available , unchecked = not available <br> <br>
        <button type="submit"> Update Category</button>
    </form>
</body>
</html>