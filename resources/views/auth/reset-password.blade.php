<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>

    @include('partials._links');
    <style>
        .login-form{
            position : absolute;
            top : 50%;
            left : 50%;
            transform : translate(-50%,-50%);
            width : 400px;
        }
    </style>
</head>
<body class="bg-light">

<x-flash-message/>

<div class="login-form text-center rounded bg-white shadow overflow-hidden myshadow">

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <h4 class="bg-dark text-white py-3">Password Reset</h4>
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="p-4">
            <div class="form-group mb-4">
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required class="form-control shadow-none text-center mb-3">
                </div>
                <div>
                    <label for="password">New Password:</label>
                    <input type="password" name="password" id="password" required class="form-control shadow-none text-center mb-3">
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control shadow-none text-center mb-3">
                </div>

                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
