@yield('connect')
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css"> 
    <script src="js/scripts.js"></script>
    <title>Register</title>
</head>

<div class="register-page">
    <div class="form">
        <form action="{{route('auth.userRegister')}}" method="post" class="register-form">
            @csrf

            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
            id="username" placeholder="Username" required value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <input  type="password" name="password" class="form-control @error('password') is-invalid @enderror"
            id="password" placeholder="Password" required>

            <input type="password" name="password_confirmation"
            class="form-control @error('password_confirmation') is-invalid @enderror" id="password"
            placeholder="Password Confirmation" required>

            <button type="submit">create</button>
        </form>
        <p class="message">Already registered? <a href="/login">Sign In</a></p>
    </div>
</div>