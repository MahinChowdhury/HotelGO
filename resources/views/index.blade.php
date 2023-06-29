<x-layout>

    <!-- Video slider starts -->

    <div class="home">
        <video class="video-slide active" src="{{asset('videos\video(4).mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('videos\video.mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('videos\video(2).mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('videos\video(5).mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('videos\video(7).mp4')}}" autoplay muted loop></video>


        <div class="homecontent">
            <h1>Wonderful.<br><span>Hotel Trips</span></h1>
            <p>"Hotels are not just places to stay; they are gateways to adventure, to culture, and to the unknown. They
                are places where you can start your day with a cup of coffee and a view of the sunrise over the city,
                and end it with a glass of wine and the sound of the ocean. They are places where you can immerse
                yourself in the local culture, try new foods, and meet new people. Hotels are not just a place to sleep,
                but a place to dream, to explore, and to discover."</p>

            <a href="#" class="text-decoration-none">Read More</a>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="slider-nav mt-1">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>

    </div>

    <!-- Video Slider Ends -->

    <!-- Check availibility Form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded available-box mt-4">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form action="">
                    <div class="row align-items-center ">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-3 mr-5">
                            <label class="form-label" style="font-weight:500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mr-4 mb-3">
                            <label class="form-label" style="font-weight:500;">Children</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="0">Zero</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 ml-2 mt-3">
                            <button type="submit" class="btn btn-primary text-white shadow-none">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- check availability form ends -->

    <!-- Our Rooms -->

    <!-- <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2> -->

    <div class="container bg-white pb-4 pl-4 pr-4 myshadow">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
        <div class="row">
            @foreach($rooms as $room)
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 room-card myshadow" style="max-width: 350px;margin:auto;">
                        <img src="{{ asset('upload/rooms/'. $room->img) }}" class="img-fluid rounded">
                        <div class="card-body">
                            <h5 class="card-title">{{$room->name}}</h5>
                            <h6 class="mb-4">${{$room->price}} per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                @foreach($room->features as $feature)
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">{{$feature->name}}</span>
                                @endforeach
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                @foreach($room->facilities as $facility)
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">{{$facility->name}}</span>
                                @endforeach
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">{{$room->guests}}</span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
              </span>
                            </div>
                            <div class="d-flex justify-content-center" mb-2>
                                <a href="#" class="btn btn-primary mr-2">Book Now</a>
                                <a href="rooms/{{$room->id}}" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Rooms</a>
            </div>
        </div>
    </div>
    <!-- Rooms section ends -->

    <!-- Facilities section -->

    <!-- <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Facilities</h2> -->

    <div class="container bg-warning pb-4 pl-4 pr-4 myshadow">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Facilities</h2>
        <div class="row justify-content-around px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded myshadow py-4">
                <img src="{{asset('images/facilities/WIFI.svg')}}" alt="WIFI" width="80px">
                <h5 class="mt-3">WIFI</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded myshadow py-4">
                <img src="{{asset('images/facilities/AC.svg')}}" alt="AC" width="80px">
                <h5 class="mt-3">AC</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded myshadow py-4">
                <img src="{{asset('images/facilities/TV.svg')}}" alt="TV" width="80px">
                <h5 class="mt-3">TV</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded myshadow py-4">
                <img src="{{asset('images/facilities/HEATER.svg')}}" alt="WIFI" width="80px">
                <h5 class="mt-3">HEATER</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded myshadow py-4">
                <img src="{{asset('images/facilities/SPA.svg')}}" alt="WIFI" width="80px">
                <h5 class="mt-3">SPA</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Facilities</a>
            </div>
        </div>
    </div>

    <!-- Facilities Section Ends -->

    <!-- Testimonial Section -->

    <!-- <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2> -->

    <div class="container bg-white myshadow">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
        <div class="swiper swipperTestimonial">
            <div class="swiper-wrapper mb-4">
                <div class="swiper-slide bg-white p-4">
                    <div class="swiper-slide bg-white myshadow p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="assets/images/facilities/TV.svg" alt="" width="30px">
                            <h6 class="m-0 ms-2">Random User1</h6>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt inventore rem quos
                            accusantium ipsam quibusdam libero ipsum molestiae saepe nam. Eaque omnis ad nulla est sint
                            ipsum voluptatibus, saepe modi!</p>
                        <div class="rating">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="swiper-slide bg-white myshadow p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="assets/images/facilities/TV.svg" alt="" width="30px">
                            <h6 class="m-0 ms-2">Random User1</h6>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt inventore rem quos
                            accusantium ipsam quibusdam libero ipsum molestiae saepe nam. Eaque omnis ad nulla est sint
                            ipsum voluptatibus, saepe modi!</p>
                        <div class="rating">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="swiper-slide bg-white myshadow p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="assets/images/facilities/TV.svg" alt="" width="30px">
                            <h6 class="m-0 ms-2">Random User1</h6>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt inventore rem quos
                            accusantium ipsam quibusdam libero ipsum molestiae saepe nam. Eaque omnis ad nulla est sint
                            ipsum voluptatibus, saepe modi!</p>
                        <div class="rating">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination mt-2"></div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none mb-4">More Testimonials</a>
        </div>
    </div>

    <!-- Testimonial Section Ends -->

    <!-- Contact Us section -->

    <div class="container bg-info pb-2 myshadow">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact US</h2>
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-info rounded">
                <iframe class="w-100 rounded myshadow" height="350px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.3474395064654!2d89.50016781504463!3d22.900552385015065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9bda1d0ff6e5%3A0x123a926908efcd0c!2sKhulna%20University%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sbd!4v1679671506066!5m2!1sen!2sbd"
                        loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4 myshadow">
                    <h5>Call US : </h5>
                    <a href="" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="fa-solid fa-phone"></i>+8801839963763</a>
                    <br>
                    <a href="" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="fa-solid fa-phone"></i>+8801521583700</a>

                </div>

                <div class="bg-white p-4 rounded mb-4 myshadow">
                    <h5>Follow US : </h5>
                    <a href="" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="fab fa-facebook-f"></i> Facebook</a>
                    <br>
                    <a href="" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="fab fa-twitter"></i>
                        Twitter</a>
                    <br>
                    <a href="" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="fab fa-instagram"></i> Instragram</a>
                    <br>
                    <a href="" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="fab fa-twitch"></i>
                        Twitch</a>

                </div>
            </div>
        </div>
    </div>
    <!-- contact us section ends -->

    @include('partials._swiper1');

</x-layout>
