@yield('connect')
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style`s.css"> 
    <script src="js/scripts.js"></script>
    <title>Login</title>
</head>

<div class="login-page">
    <div class="form">
        <form action="{{route('auth.userLogin')}}" method="POST">
            @csrf
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            
            <input type="password" name="password" class="form-control" id="password" placeholder="Password"
            required>

            <button type="submit">Login</button>
        </form>
        <p class="message">Not registered? <a href="/register">Create an account</a></p>
    </div>
</div>
