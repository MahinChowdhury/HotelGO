<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>

    @include('partials._links')
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

<div class="login-form text-center rounded bg-white shadow overflow-hidden myshadow">
    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
        <div class="p-4">
            <div class="form-group mb-4">
                <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
            </div>
            <div class="form-group mb-4">
                <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
            </div>
            <button name="login_btn" type="submit" class="btn text-white btn-primary shadow-none">LOGIN</button>
        </div>
    </form>
</div>

</body>
</html>
