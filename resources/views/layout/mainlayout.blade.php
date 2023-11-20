<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10| @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blade templating</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="home" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/students">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/class">Class</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/extracurricular">Extracurricular</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/teacher">Teacher</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="btn btn-danger">
            <a class="nav-link" href="/logout">Logout</a>
        </li>
        
        <li class="btn btn-success mx-3">
            <a class="nav-link" href="/register">Registrasi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class = 'container-fluid'>
    @yield('content')
    @yield('about-content')
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>