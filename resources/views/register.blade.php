<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>regiater</title>
</head>
<body>
<center>
    <div class="p-3 mb-5 bg-body rounded;">
        <h1>Welcome</h1>
    <div class="card; shadow p-3 mb-5 bg-body rounded" style="width: 40rem">
        <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="post" action="/listdata" class="form-signin";>
                        {{csrf_field()}}
						<div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label class="d-flex align-items-start" style="width: 38rem;">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label class="d-flex align-items-start" style="width: 38rem;">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label class="d-flex align-items-start" style="width: 38rem;">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group; mb-3">
                            <label class="d-flex align-items-start" style="width: 38rem;">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>
                        {{-- <div class="form-group checkbox; mb-3">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div> --}}
                        <div class="form-group text-center; mb-3">
                            <input href="/register-list" class="btn btn-primary" type="submit" value="Register">
                            <input class="btn btn-primary" type="reset" value="Reset">
                            <!-- <input class="btn btn-primary account-btn" type="reset" value="Register">Register</button>
                            <button class="btn btn-primary account-btn" type="submit" value="Reset">Reset</button> -->
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="http://localhost/Final%20WBD/Back_end/pages/login.php ">Login</a>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
    </div>
    </div>
    </center>
</body>
</html>
