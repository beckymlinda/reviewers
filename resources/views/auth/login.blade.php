<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NCHE Reviewer Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 400px;
        }

        .nche-purple {
            background-color: #52074f;
            color: #ffffff;
        }

        .btn-nche {
            background-color: #dd8027;
            color: #fff;
        }

        .btn-nche:hover {
            background-color: #c56f20;
        }

        .form-label {
            color: #52074f;
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="card shadow border-0">
        <div class="card-header text-center nche-purple">
            <h4 class="mb-0">NCHE Reviewer Login</h4>
        </div>
        <div class="card-body">
            <!-- Flash message (optional) -->
            <!-- <div class="alert alert-success">Logged out successfully</div> -->

            <form method="POST" action="/login">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>

                <!-- Action buttons -->
                <div class="d-flex justify-content-between align-items-center">
                    <a href="/forgot-password" class="text-decoration-none small text-muted">Forgot password?</a>
                    <button type="submit" class="btn btn-nche">Log in</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
