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
    <link rel="stylesheet" href="{{ asset('css/patients/home.css') }}" />
</head>

<body class="sb-nav-fixed bg-light">

    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-between">
            <div class="container">
                <a href="#" class="navbar-brand fw-bold text-primary">Hope Clinic</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#fornav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="fornav" class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="#" class="nav-link active me-2">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link me-2">Departments</a></li>
                        <li class="nav-item"><a href="#" class="nav-link me-2">About Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link me-2">Contact Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link me-2">Our Team</a></li>
                        <li class="nav-item"><a href="#" class="nav-link me-2">Reviews</a></li>
                    </ul>
                    <div class="nav-item dropdown">
                        <div class="dropdown btn-group">
                            <img name="image" class="img dropdown-toggle" data-bs-toggle="dropdown"
                                src="{{ asset('img/img_user.png') }}" alt="User">
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php?id='$email'">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--/.container -->

    <section class="patient-bg py-5">
        <div class="container mt-1">
            <div class="row">
                <div class="col-5">
                    <h3 class="pt-3 pb-4 patient-cmn-ttl">Everytime Along With Hope</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="********">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone" placeholder="09*********">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="form-group d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male">
                                <label class="form-check-label me-3" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female"
                                    checked>
                                <label class="form-check-label me-3" for="female">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="other">
                                <label class="form-check-label" for="other">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-primary d-block mb-3">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="container-fluid bg-dark mt-5">
        <div class="row">
            <div class="col-12">
                <div class="container text-light mt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <h2 class="text-primary fw-medium text-md-start  text-sm-center">Hope Clinic</h2>
                            <ul class="mt-3 list-unstyled text-md-start text-sm-center">
                                <li><i class="me-2 mb-2 fas fa-phone"></i>+95-9789568745</li>
                                <li><i class="me-2 mb-2 fas mailto:fa-envelope"></i>hopeclinic@gmail.com</li>
                                <li><i class="me-2 mb-2 fas fa-home"></i>Yangon</li>
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
</body>

</html>
