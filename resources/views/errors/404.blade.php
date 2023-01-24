<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>404 Error</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @yield('css')
</head>
<body class="sb-nav-fixed bg-light" style="background:url('{{ asset('img/img_404_bg.jpg') }}')no-repeat center/cover">
   <section class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-2 text-center">
          <h1 style="font-size: 150px;">404</h1>
          <h2 class="my-3">Page Not Found</h2>
          <a class="link" href="{{ route('home') }}">Home</a>
        </div>
      </div>
    </div>
   </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>

</html>
