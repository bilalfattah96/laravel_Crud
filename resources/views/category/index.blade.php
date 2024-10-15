<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <a href="{{url('category/create')}}">Add Category</a>
    <table border='2px'>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($categories as $category)
           <tr>
            <td>{{$category -> id}}</td>
            <td>{{$category -> name}}</td>
            <td>{{$category -> description}}</td>
            <td>{{$category -> status == 1 ? 'available' : 'Not available' }}</td>
             <td>
            <a href="{{route('category.edit', $category -> id)}}">Edit</a>
            <a href="{{route('category.show', $category -> id)}}">Show</a>  
            <form action="{{route('category.destroy',$category -> id)}}" method="post">
                @csrf
                @method('DELETE')
              <button type="submit">Delete</button> 
            </form>
            
            </td> 
           </tr>
           @endforeach
    </table>
</body>
</html>