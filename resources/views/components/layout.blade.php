<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelGO</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body class="bg-light">

<x-flash-message/>
<!-- navigation starts -->
<nav>
    <header>
        <div class="navbar">
            <div class="logo"><img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="" height="40px"width="40px" class="mr-2"><a href="/">HotelGO</a></div>
            <ul class="links mt-2">
                <li><a href="/">Home</a></li>
                <li><a href="/rooms">Rooms</a></li>
                <li><a href="/facilities">Facilities</a></li>
                <li><a href="/contact">Contract Us</a></li>
                <li><a href="/about">About</a></li>
            </ul>
            <div class="login d-flex justify-content-between">
                @auth
                    <div class="user-profile" style="margin-right: 50px;">
                        <button class="profile-button btn">
                            <img class="profile-image" src="{{ asset('upload/users/' . Auth::user()->image) }}" alt="User Image">
                        </button>
                        <a href="/userBookings" class="mr-2">Bookings</a>
                        <button>
                            <form class="inline" action="/users/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-dark">
                                    <i class="fa fa-sign-out"></i>
                                </button>
                            </form>
                        </button>
                    </div>

                @else
                <a href="#" class="login_btn mr-2" data-toggle="modal" data-target="#loginModal">Login</a>
                <li><button type="button" class="btn btn-primary" id="register_btn" data-toggle="modal" data-target="#registerModal">Register</button></li>
                @endauth
            </div>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <ul class="links">
                <li><a href="">Home</a></li>
                <li><a href="">Rooms</a></li>
                <li><a href="">Facilities</a></li>
                <li><a href="">Contract US</a></li>
                <li><a href="">About</a></li>
                <div class="d-flex align-items-center justify-content-end">
                    <li><a href="#" class="login_btn" data-toggle="modal" data-target="#loginModal">Login</a></li>
                    <li><button type="button" class="btn btn-primary registerbtn" data-toggle="modal" data-target="#registerModal">Register</button></li>
                </div>
            </ul>
        </div>
    </header>

    <!-- Register Modal Section -->
    <div class="modal fade" id="registerModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content w-75">
                <form action="/users/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title text-body" id="staticBackdropLabel">Register</h5>
                        <button type="reset" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Image</label>
                                <input type="file" name="image" accept=".jpg , .png , .jpeg" class="form-control shadow-none">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-dark ml-2">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Login Modal section -->

    <div class="modal fade" id="loginModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/users/login" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title text-body" id="staticBackdropLabel">User Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/forgot-password">Forgot Password?</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</nav>

<!-- Navigation ends -->

{{$slot}}

<!-- Footer Section -->

<div class="container-fluid footer mt-4 mb-0">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="fw-bold fs-3 mb-2"><img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="" height="40px"width="40px" class="mr-2">HotelGO</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                In ex totam, commodi, magni numquam fuga laboriosam ea, explicabo quaerat voluptatum repellat delectus.
                Id, at sunt qui deleniti dolore voluptas minima.
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="" class="d-inline-block mb-2 text-white text-decoration-none">Home</a><br>
            <a href="" class="d-inline-block mb-2 text-white text-decoration-none">Rooms</a><br>
            <a href="" class="d-inline-block mb-2 text-white text-decoration-none">Facilities</a><br>
            <a href="" class="d-inline-block mb-2 text-white text-decoration-none">Contact US</a><br>
            <a href="" class="d-inline-block mb-2 text-white text-decoration-none">About</a>
        </div>
        <div class="col-lg-4 p-4">
            <h5>Follow US : </h5>
            <a href="" class="d-inline-block mb-2 text-decoration-none text-white"><i class="fab fa-facebook-f"></i> Facebook</a>
            <br>
            <a href="" class="d-inline-block mb-2 text-decoration-none text-white"><i class="fab fa-twitter"></i> Twitter</a>
            <br>
            <a href="" class="d-inline-block mb-2 text-decoration-none text-white"><i class="fab fa-instagram"></i> Instragram</a>
            <br>
            <a href="" class="d-inline-block mb-2 text-decoration-none text-white"><i class="fab fa-twitch"></i> Twitch</a>
        </div>
    </div>
</div>

<script src="{{asset('js/script.js')}}"></script>

<!-- Footer Section ends -->

</body>
</html>
