<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NCHE Reviewer Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f9f9f9;
        }
        .nche-purple {
            color: #52074f;
        }
        .btn-nche {
            background-color: #dd8027;
            color: white;
        }
        .btn-nche:hover {
            background-color: #c56f20;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm p-4 w-100" style="max-width: 500px;">
        <h2 class="text-center mb-4 nche-purple">Create Your Reviewer Account</h2>

        <form method="POST" action="/register">
            <!-- CSRF token if in Laravel -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label nche-purple">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label nche-purple">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label nche-purple">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="form-label nche-purple">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <!-- Footer -->
            <div class="d-flex justify-content-between align-items-center">
                <a href="/login" class="text-sm text-decoration-underline nche-purple">Already registered?</a>
                <button type="submit" class="btn btn-nche">Register</button>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
