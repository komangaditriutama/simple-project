<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel|Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .login-box{
        border:solid 1px;
        width: 500px;
        padding: 20px;
        box-sizing: border-box;
    }
</style>
<body>
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
        @if (Session::has('status'))
        <div class="alert alert-danger" role="alert">
        {{ Session::get('massage') }}
      </div>
    @endif
        <div class="login-box">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">password</label>
                    <input type="password" name="password" id="password" class="form-control" requared>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control" type="submit">Login</button>
                </div>
                <div class="mb-3">
                    <li class="btn btn-success form-control">
                        <a class="nav-link" href="/register">Registrasi</a>
                    </li>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>