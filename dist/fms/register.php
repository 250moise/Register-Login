<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HomePage:: Sign Up</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <div class="container">
        <div class="card shadow-sm o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-login-image" style="background: url(&quot;assets/img/dogs/student-849822_960_720.webp&quot;) left;"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center" style="margin-top: 50px;">
                                <h4 class="text-dark mb-4">Sign up</h4>
                            </div>
                            <form class="user" method="POST" action="includes/user-register.php">
                                <div class="mb-3">
                                    <input class="form-control form-contol " type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Full Names" name="names">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="username" name="username">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control btn-sm form-contol " type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-mail" name="email">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-contol " type="password" id="exampleInputPassword" placeholder="Password" name="password">
                                </div>
                                <div class="mb-3">
                                     <input type="submit" value="Register" class="btn btn-primary btn-sm d-block btn-user w-100">
                                </div>
                            </form>
                            <div class="text-center" style="margin-top: 14px;"><a class="small" href="index.php" style="margin-bottom: 0px;margin-top: 0px;">Have Account? Login..</a></div>
                            <p style="margin-top: 78px;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>