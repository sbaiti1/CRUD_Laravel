<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>showdata</title>
</head>
<body>

    total : {{$total}}
    <a href="/newUser">add user</a>
     @foreach ($data as $item)
        
    <h6> id : {{ $item->id }} </h6>
    <h6> id : {{ $item->name }} </h6>
    <h6> id : {{ $item->email }} </h6>
    <?php $link = "/edit/".$item->id ;$link2 = "/delete/".$item->id;?>
    <a href=" {{$link}} ">edit</a>
    <a href=" {{$link2}} ">delete</a>

    <hr>

    @endforeach
</body>
</html>