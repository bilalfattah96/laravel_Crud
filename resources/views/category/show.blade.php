<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <label for="">Name</label> <br> <br>
    <p>{{$category ->name}}</p> <br> <br>
    <label for="">Description</label> <br> <br>
    <p>{{$category ->description}}</p> <br> <br>
    <label for="">Status</label>
    <p>{{$category ->status == 1 ? 'Available' : 'Not Available'}}</p>
</body>
</html>