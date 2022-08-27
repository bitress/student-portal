<?php

    include_once 'config/init.php';

    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | ISPSC Student Portal</title>
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <img src="assets/images/logo/ispsc_logo_small.png" alt="logo" width="100">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Login to Student Portal</h1>

                        <form>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="student_id">Student ID</label>
                                <input id="student_id" type="text" class="form-control" name="student_id" placeholder="Enter your ID (E01-12345)" pattern="[E][0-9]{2}-[0-9]{5}" required>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="student_pin">Student PIN</label>
                                    <a href="forgot.html" class="float-end">
                                        Forgot PIN?
                                    </a>
                                </div>
                                <input id="student_pin" type="password" class="form-control" placeholder="Enter your PIN" name="student_pin" required>
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="button" id="login-student" class="btn btn-primary ms-auto">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2022 &mdash; Cyanne Justin Vega
                </div>
            </div>
        </div>
    </div>
</section>


    <script src="assets/jquery/jquery-3.6.1.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>
