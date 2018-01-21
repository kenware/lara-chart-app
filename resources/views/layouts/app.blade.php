<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        <style>
        body {
          
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .room{
        background-color: aliceblue;
        }
        .welcome{
          margin-top: 5rem;
        }
        .sidebar {
          background-color: rgb(198, 235, 222);
          color: white;
          top:50px;
          position: fixed;
          bottom: 0;
          left: 0;
          z-index: 1000;
          padding: 20px 0;
          overflow-x: hidden;
          overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
          border-right: 1px solid #eee;
        }
          </style>
</head>
<body id="app-layout">

<header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-info fixed-top" id="navbar">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" navbararia-controls="#navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Alexie-Messenger</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/home') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          @if (Auth::guest())
          <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link">Register</a></li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->username }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="dropdown-item"><a href="{{ url('/logout') }}" class="nav-link"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                <li class="dropdown-item">
                 <a class="nav-link" href="{{url('/profile')}}">profile</a>
                </li>
                <li class="dropdown-item"><a id="ad" class="btn nav-link">Add Chart</a></li>
              </div>
           </li>
            @endif
            
          </ul>
        </div>
      </div>
    </nav>
    </header>
 


    @yield('content')
   


 
    <!-- JavaScripts -->
    <script>
    $(document).ready(function () {
      
        $('#chart').hide();
        $('#add').click(function(){
            $('#chart').toggle(); 
        });
        $('#ad').click(function(){
            $('#chart').toggle(); 
        });
    });
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
