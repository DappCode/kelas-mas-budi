<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('auth.destroy') }}"> Logout <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0 mx-3" method="GET" action=" {{route('student.search')}} ">
            <input name="keyword" class="form-control" type="text" placeholder="Search">
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="row pt-4">
            @yield('content')
        </div>
    </div>
    
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.min.js"></script>
</body>
</html>