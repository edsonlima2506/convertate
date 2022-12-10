<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convertate</title>

    {{-- Global Style --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    {{-- Icons --}}
    <script src="https://unpkg.com/phosphor-icons"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>

    {{-- JQuery Ajax --}}
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="{{asset('img/convertate-logo.png')}}" alt="Logo" width="120" height="30" class="d-inline-block align-text-top">
              </a>
    
              <form class="d-flex" role="search">
                <a class="btn btn-outline-danger"><span class="d-flex align-items-center"><i class="ph-heart"></i>Apoiar</span></a>
              </form>
            </div>
        </nav>
    </header>
</body>
</html>