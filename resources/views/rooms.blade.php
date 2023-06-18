<x-layout>
    <div class="container">
        <div class="my-5 px-4">
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown">
                            <span class=navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size : 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check In</label>
                                <input type="date" class="form-control shadow-none">
                                <label class="form-label">Check Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size : 18px;">FACILITIES</h5>
                                <div class="ml-2 mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility one</label>
                                </div>
                                <div class="ml-2 mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility two</label>
                                </div>
                                <div class="ml-2 mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility three</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size : 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Childrens</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <div class="card mb-4 border-0 myshadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="{{asset('images/rooms/room-01.jpg')}}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Bathroom
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Telivision
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Childrens
                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">$200 per night</h6>
                            <a href="#" class="btn btn-primary mr-2 mb-1">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 myshadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="{{asset('images/rooms/room-02.jpg')}}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Bathroom
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Telivision
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Childrens
                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">$200 per night</h6>
                            <a href="#" class="btn btn-primary mr-2 mb-1">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 myshadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="{{asset('images/rooms/room-03.jpg')}}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Bathroom
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Telivision
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Childrens
                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">$200 per night</h6>
                            <a href="#" class="btn btn-primary mr-2 mb-1">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
