<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit User</title>
</head>
<body>
        
        <form action="/data" method="post">
            @csrf 
            @method('PUT')
            <input type="hidden" name="id" value= "{{$user[0]->id}}" >
            <input type="text" name="name" value=" {{$user[0]->name}} ">
            <input type="email" name="email" value=" {{$user[0]->email}} " id="">
            <button type="submit">Submit</button>
        </form>
</body>
</html>