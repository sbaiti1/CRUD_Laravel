<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
    <h5>are u sure u want to delete this record</h5>
       
        <form action="/data" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="id" value=" {{$id}} ">
            <a href="/data">no</a>
            <button type="submit">yes</button>
        </form>

</body>
</html>