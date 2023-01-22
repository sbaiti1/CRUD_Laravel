<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User</title>
</head>
<body>
        
        <form action="/data" method="post">
            @csrf 
            <input type="number" name="id">
            <input type="text" name="name">
            <input type="email" name="email" id="">
            <button type="submit">Submit</button>
        </form>
</body>
</html>