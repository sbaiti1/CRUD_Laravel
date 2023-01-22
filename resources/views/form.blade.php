<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User</title>
</head>
<body>
        <h1> @yield('title') </h1>
        <form action=@yield('uri') method=@yield('method')>
            @csrf 
            <input type="text" name="name">
            <input type="email" name="email" id="">
            <button type="submit">Submit</button>
        </form>
</body>
</html>