<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register | Awinet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="../assets/fonts/material.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="auth-header">
                                    <h1 class="text-secondary mt-5"><b>Register</b></h1>
                                    <p class="f-16 mt-2">Create an account to continue</p>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register.store') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control" id="floatingName" placeholder="Name" required>
                                <label for="floatingName">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="Email address" required>
                                <label for="floatingEmail">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password_confirmation" class="form-control" id="floatingPasswordConfirmation" placeholder="Confirm Password" required>
                                <label for="floatingPasswordConfirmation">Confirm Password</label>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-secondary">Register</button>
                            </div>
                        </form>
                        <hr>
                        <h5 class="d-flex justify-content-center">Already have an account? <a href="{{ route('login') }}">Login</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
