<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  
    

    <!-- Styles -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .row.content {height: 1500px}
    .sidenav {
        text-align: left;
      padding-top: 20px;
      background-color:dimgray;
      height: 100%;
      font-size: 20px;

    }
</style>
</head>
<body>
<div id="app">
<nav class="navbar navbar-inverse" >
    <div class="container-fluid">
        <div class="navbar-header">

        </div>
                            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


        </div>
    </div>
</nav>


        @yield('content')
</div>

    

</body>
</html>
