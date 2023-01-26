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

    <nav class="sb-topnav navbar navbar-expand  bg-lightblue">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-light logo" href="#">
            Hope Clinic
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-light" id="sidebarToggle"
            href="#!"><i class="fas fa-bars"></i></button>
        <ul class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end text-light" aria-labelledby="navbarDropdown">
                    <li>
                        @if (session()->has('doctor'))
                            <a class="dropdown-item"
                                href="{{ route('doctor.show', session('doctor')->id) }}">Profile</a>
                        @elseif (session()->has('admin'))
                            <a class="dropdown-item" href="{{ route('admin.show', session('admin')->id) }}">Profile</a>
                        @endif
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        @if (session()->has('doctor'))
                            <a class="dropdown-item" href="{{ route('doctor.logout') }}" >Logout</a>
                        @endif
                        @if (session()->has('admin'))
                            <a class="dropdown-item" href="{{ route('admin.logout') }}" >Logout</a>
                        @endif
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion bg-lightblue text-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        @if (session()->has('admin'))
                            <a class="nav-link text-light" href="{{ route('doctor.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        @endif
                        @if (session()->has('doctor'))
                            <a class="nav-link text-light" href="{{ route('bookings.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        @endif
                        <div class="sb-sidenav-menu-heading">Manage Clinic</div>
                        @if (session()->has('admin'))
                            <a class="nav-link text-light" href="{{ route('doctor.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-doctor"></i></div>
                                Doctor
                            </a>
                        @endif
                        @if (session()->has('doctor'))
                            <a class="nav-link text-light" href="{{ route('medicines.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-pills"></i></div>
                                Medicine
                            </a>
                            <a class="nav-link text-light" href="{{ route('checkout.bookingList') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Checkout
                            </a>
                            <a class="nav-link text-light" href="{{ route('invoice.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Invoice
                            </a>
                        @endif
                        @if (session()->has('admin'))
                            <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-simple"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-light" href="{{ route('barchart.weekly') }}">Income
                                        Statement</a>
                                </nav>
                            </div>
                        @endif
                        <div class="sb-sidenav-menu-heading">Setting</div>
                        @if (session()->has('doctor'))
                            <a class="nav-link text-light" href="{{ route('doctor.show', session('doctor')->id) }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Profile
                            </a>
                        @elseif (session()->has('admin'))
                            <a class="nav-link text-light" href="{{ route('admin.show', session('admin')->id) }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Profile
                            </a>
                        @endif
                        @if (session()->has('admin'))
                            <a class="nav-link text-light" href="{{ route('admin.logout') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-right-from-bracket"></i></div>
                                Logout
                            </a>
                        @endif
                        @if (session()->has('doctor'))
                            <a class="nav-link text-light" href="{{ route('doctor.logout') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-right-from-bracket"></i></div>
                                Logout
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
        @include('sweetalert::alert')
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4 pt-2">
                @yield('content')
            </div>
            </main>
            <footer class="py-4 bg-light mt-auto mx-auto">
                <span class="text-center text-blue">2023 &copy; CLINIC.ORG &trade;</span>
            </footer>
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
