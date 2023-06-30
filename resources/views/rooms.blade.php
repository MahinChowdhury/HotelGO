<x-layout>
    <div class="container">
        <div class="my-5 px-4">
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-2">
                <nav>
                    <div class="filterBar myshadow bg-light">
                        <form action="{{ route('rooms.search') }}" method="POST">
                            @csrf

                            <div class="border bg-light p-3 rounded mb-1">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check In</label>
                                <input type="date" name="check_in" class="form-control shadow-none">
                                <label class="form-label">Check Out</label>
                                <input type="date" name="check_out" class="form-control shadow-none">
                            </div>

                            <div class="border bg-light p-3 rounded mb-1">
                                <h5 class="" style="font-size: 18px;">CATEGORIES</h5>
                                <div class="ml-3 mb-2">
                                    <input type="checkbox" name="categories[]" id="f1" value="Small" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Small</label>
                                </div>
                                <div class="ml-3 mb-2">
                                    <input type="checkbox" name="categories[]" id="f2" value="Medium" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Medium</label>
                                </div>
                                <div class="ml-3 mb-2">
                                    <input type="checkbox" name="categories[]" id="f3" value="Deluxe" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Deluxe</label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-2">
                                <h5 class="mb-3" style="font-size: 18px;">PRICE</h5>
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <label class="form-label">Minimum</label>
                                        <input type="number" name="min_price" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Maximum</label>
                                        <input type="number" name="max_price" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm mb-3" style="margin-left: 50px;">Search</button>
                        </form>

                    </div>
                </nav>
            </div>
            <div class="col-lg-10">
                @foreach($rooms as $room)
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 m-1 p-3 align-items-center">
                            <div class="col-md-5">
                                <img src="{{ asset('upload/rooms/'. $room->img) }}" class="img-fluid rounded">
                            </div>
                            <div class="col-md-5">
                                <h5 class="mb-3">{{$room->name}}</h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    @foreach($room->features as $feature)
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">{{$feature->name}}</span>
                                    @endforeach
                                </div>
                                <div class="facilities mb-3">
                                    <h6 class="mb-1">Facilities</h6>
                                    @foreach($room->facilities as $facility)
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">{{$facility->name}}</span>
                                    @endforeach
                                </div>
                                <div class="category mb-3">
                                    <h6 class="mb-1">Category</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">{{$room->category}}</span>
                                </div>
                                <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">{{$room->guests}} Persons</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-align-center">
                                <h6 class="mb-4">${{$room->price}} per night</h6>
                                <a href="confirm_booking/{{$room->id}}" class="btn mb-2" style="background-color: #61e99a">Book Now</a>
                                <a href="rooms/{{$room->id}}" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
