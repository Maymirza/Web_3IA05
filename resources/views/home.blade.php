<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
        Selamat Datang <strong>{{ auth()->user()->username }}</strong>
        <br><br>
        <form action="/logout" method="post">
            @csrf
            <button type='submit' class='dropdown-item'>
                Logout</button>
        </form>
</body>
</html>