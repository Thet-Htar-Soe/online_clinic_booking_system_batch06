<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hope Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body class="sb-nav-fixed bg-light">
    @include('sweetalert::alert')
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4 col-md-4 col-sl-8 col-xs-8">
                @if (session('doesNotMatch'))
                    <div class="alert alert-danger">
                        {{ session('doesNotMatch') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center text-blue">
                            <i class="text-blue fas fa-users"></i>
                            Doctor Login
                        </h4>
                        <hr>
                        <form action="{{ route('doctor.login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="my-1">
                                    <i class="text-blue fas fa-columns"></i>
                                    Email
                                </label>
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                                    placeholder="name@gmail.com">
                                @error('email')
                                    <small class="font-weight-bold text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="my-1">
                                    <i class="text-blue fas fa-key"></i>
                                    Password
                                </label>
                                <input class="form-control" type="password" name="password" placeholder="********">
                                @error('password')
                                    <small class="font-weight-bold text-danger">{{ $message }}</small>
                                @enderror
                                @if (session('info'))
                                    <small class="font-weight-bold text-danger">{{ session('info') }}</small>
                                @endif
                            </div>
                            <br>
                            <div class="form-group">
                                <button name="btn-login" class="btn btn-blue form-control text-light">Login</button>
                            </div>
                            <div class="text-center">
                                <a class="" href="{{ route('home') }}">Home</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>

</html>
