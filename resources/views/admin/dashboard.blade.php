<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    @include('partials._links')
</head>
<body class="bg-white">

@include('partials._sidebar');
<div class="container-fluid" style="margin-left: 200px;">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overlow-hidden">
            <h2 class="mb-4">Hi,Admin!</h2>

            <h5>Total Users : {{$users_cnt}}</h5>
            <h5>Total Rooms : {{$rooms_cnt}}</h5>
            <h5>Total Bookings : {{$bookings_cnt}}</h5>

        </div>
    </div>
</div>
</body>
</html>
