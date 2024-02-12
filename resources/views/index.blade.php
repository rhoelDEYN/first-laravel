<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder" href="#">Dental Appointment</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Appointments
                        </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!--LOGIN FORM MODAL-->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="login-form">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>Patient Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Email / Phone</label>
                            <input type="text" name="email_phone" required class="form-control shadow-none" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control shadow-none" >
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button class="btn btn-dark shadow-none px-4 mb-2">LOGIN </button>
                            <button type="button" class="btn text-secondary text-decoration-none mb-2 shadow-none p-0" data-bs-target="#forgotModal" data-bs-toggle="modal" data-bs-dismiss="modal">
                            Forgot Pasword?
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--REGISTRATION FORM MODAL-->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="register-form">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-add fs-3 me-2"></i>User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your Details must match with your ID (philHealth Card, Passport, Driving license, etc...) that will be required during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3 ps-0">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control shadow-none" placeholder="Enter your fullname" required>
                                </div>
                                <div class="col-md-6 mb-3 p-0">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control shadow-none" placeholder="Enter your valid email" required>
                                </div>
                                <div class="col-md-6 mb-3 ps-0">
                                    <label class="form-label">Contact Number</label>
                                    <input type="number" name="conNum" class="form-control shadow-none" placeholder="(e.g 0951******6)" required>
                                </div>
                                <div class="col-md-6 mb-3 p-0">
                                    <label class="form-label">Picture</label>
                                    <input type="file" name="profile" accept=".jpg, .jpeg, .png, .webp"class="form-control shadow-none" placeholder="Enter your address" required>
                                </div>
                                <div class="col-md-12 mb-3 p-0">
                                    <label class="form-label">Address</label>
                                    <textarea name="address" class="form-control shadow-none" rows="1" required></textarea>
                                </div>
                                <div class="col-md-6 mb-3 ps-0">
                                    <label class="form-label">Zip Code</label>
                                    <input type="number" name="zipcode" class="form-control shadow-none" placeholder="(e.g 5205)" required>
                                </div>
                                <div class="col-md-6 mb-3 p-0">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" name="birthday" class="form-control shadow-none" placeholder="" required>
                                </div>
                                <div class="col-md-6 mb-3 ps-0">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control shadow-none" placeholder="Create Password" required>
                                </div>
                                <div class="col-md-6 mb-3 p-0">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="cPassword" class="form-control shadow-none" placeholder="Confirm Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-dark shadow-none">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
