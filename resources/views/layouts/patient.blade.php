<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clinic Name</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @yield('css')

</head>

<body class="sb-nav-fixed bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-between">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand fw-bold text-blue">Hope Clinic</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#fornav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="fornav" class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active me-2">Home</a></li>
                        <li class="nav-item"><a href="{{ route('doctor.list') }}" class="nav-link me-2">Doctors</a></li>
                        @if (session()->has('patient'))
                            <li class="nav-item"><a href="{{ route('patients.booking_list') }}"
                                    class="nav-link me-2">Booking</a></li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dashboard
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.signup') }}">Admin</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('doctor.signup') }}">Doctor</a>
                                </li>
                            </ul>
                        </li>
                        @if (Session::has('patient'))
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Setting
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('patients.show', session('patient')->id) }}">Profile</a></li>
                                    <li>
                                        <form action="{{ route('patient.logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <a href="{{ route('patient.login') }}" class="btn btn-sm btn-primary">Sign In</a>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--/.container -->

    @yield('content')

    <footer class="container-fluid bg-dark pt-3">
        <div class="row">
            <div class="col-12">
                <div class="container text-light mt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a href="{{ route('home') }}" class="navbar-brand fw-bold text-blue">Hope Clinic</a>
                            <ul class="mt-3 list-unstyled text-md-start text-sm-center">
                                <li class="mt-3"><i class="me-2  fas fa-phone"></i>+95-9789568745</li>
                                <li class="mt-3"><i class="me-2 fas fa-envelope"></i>hopeclinic@gmail.com</li>
                                <li class="mt-3"><i class="me-2  fas fa-home"></i>Yangon</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 text-lg-center text-md-center text-sm-center mt-sm-3">
                            <h5>Follow Us</h5>
                            <ul class="list-unstyled d-flex align-items-center justify-content-center mt-3">
                                <li><i class="fa-brands fa-facebook me-3"></i></li>
                                <li><i class="fa-brands fa-instagram me-3"></i></li>
                                <li><i class="fa-brands fa-twitter"></i></li>
                            </ul>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 text-lg-center text-md-start text-sm-center mt-md-3 mt-sm-3">
                            <h5>Support Us</h5>
                            <ul class="list-unstyled mt-3">
                                <li><a href="#" class="text-decoration-none text-light">Documentation</a></li>
                                <li><a href="#" class="text-decoration-none text-light">FAQS</a></li>
                                <li><a href="#" class="text-decoration-none text-light">About Us</a></li>
                                <li><a href="#" class="text-decoration-none text-light">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3 mb-4">
                        <div class="col-12 text-sm-center">
                            <small class="text-light">2023 &copy; CLINIC.ORG &trade;</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--/.footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>

</html>
