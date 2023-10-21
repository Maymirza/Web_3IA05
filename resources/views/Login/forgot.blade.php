@yield('connect')
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesss.css"> 
    <script src="js/scripts.js"></script>
</head>

<div class="forgot-pw-page">
    <div class="form">
      <form class="forgot-pw-form">
        <input type="text" placeholder="Email Address"/>
        <button>forgot password</button>
        <p class="msg"><a href="{{ route('login.blade.php') }}">Back to Login</a></p>
      </form>
    </div>
  </div>
