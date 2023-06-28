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
    <form method="POST" method="/forgot-password">
        @csrf
        <h4 class="bg-dark text-white py-3">Password Reset</h4>
        <div class="p-4">
            <div class="form-group mb-4">
                <label>Enter Email : </label>
                <input name="email" required type="text" class="form-control shadow-none text-center" placeholder="Email">
            </div>
            <button name="reset_btn" type="submit" class="btn text-white btn-primary shadow-none">SEND LINK</button>
        </div>
    </form>
</div>

</body>
</html>
