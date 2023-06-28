<x-layout >

    <div class="container mt-4">
        <h2>{{$room->name}}</h2>
        <h6 class="mb-4">HOME > ROOMS</h6>
        <div class="row mb-4">
            <div class="col-md-6 mr-4">
                <img src="{{ asset('upload/rooms/'. $room->img) }}" class="img-fluid rounded">
            </div>
            <div class="col-md-4 ml-4 bg-white myshadow">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mt-2">${{$room->price}} per night</h4>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="rating">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="features mb-2">
                    <h5>Features</h5>
                    @foreach($room->features as $feature)
                        <span class="badge rounded-pill bg-light text-dark text-wrap">{{$feature->name}}</span>
                    @endforeach
                </div>
                <div class="facilities mb-2">
                    <h5>Facilities</h5>
                    @foreach($room->facilities as $facility)
                        <span class="badge rounded-pill bg-light text-dark text-wrap">{{$facility->name}}</span>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Category</h5>
                        <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">{{$room->category}}</span>
                    </div>
                    <div class="col-md-6">
                        <h5>Guests</h5>
                        <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">{{$room->guests}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h5>Area</h5>
                        <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">{{$room->area}} sqft</span>
                    </div>
                    <div class="col-md-6">
                        <h5>Quantity</h5>
                        <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">{{$room->quantity}}</span>
                    </div>
                </div>
                <a href="/confirm_booking/{{$room->id}}" class="btn w-100 mt-2 mb-3" style="background-color: #61e99a;">BOOK NOW</a>
            </div>
        </div>

        <div>
            <h4 class="mt-2">Description</h4>
            <p class="mb-4">{{$room->description}}</p>
        </div>

        <h4 class="mt-4 mb-4">Reviews & Ratings</h4>

{{--        Review of Users--}}

        <div class="reviewcard bg-white p-2 mb-4 shadow">
            <div class="row">
                <div class="col-md-6">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="assets/images/facilities/TV.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rating">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt inventore rem quos
                accusantium ipsam quibusdam libero ipsum molestiae saepe nam. Eaque omnis ad nulla est sint
                ipsum voluptatibus, saepe modi!</p>
        </div>
        <div class="reviewcard bg-white p-2 mb-4 shadow">
            <div class="row">
                <div class="col-md-6">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="assets/images/facilities/TV.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rating">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt inventore rem quos
                accusantium ipsam quibusdam libero ipsum molestiae saepe nam. Eaque omnis ad nulla est sint
                ipsum voluptatibus, saepe modi!</p>
        </div>

        <form class="submitReview">
            <h5 class="form-label fw-bold mb-3">Write a review : </h5>
            <textarea name="review" rows="4" class="form-control shadow-none" required></textarea>
            <button type="submit" class="btn btn-sm btn-primary mt-2" style="margin-left: 1045px;">Submit</button>
        </form>

    </div>

</x-layout>
