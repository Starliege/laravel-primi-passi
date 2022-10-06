<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel primi passi</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
        color: #FFFFFF;
    }
    h1 {
        text-align: center;
    }
    ul {
        text-align: center;
        list-style-type: none;
        margin-left: -30px;
    }
</style>
<body>
<h1>Hello World</h1>
<ul>
    @forelse ($professori as $item)
        <li>
            {{ $item }}
        </li>
    @empty
        <li>Non ci sono professori!</li>
    @endforelse
</ul>
<ul>
    @forelse ($studenti as $item)
        <li>
            {{ $item }}
        </li>
    @empty
        <li>Non ci sono studenti!</li>
    @endforelse
</ul>
</body>

</html>