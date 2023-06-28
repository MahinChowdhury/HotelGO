<x-layout >

    <div class="container mt-4">
        <h2>{{$room->name}}</h2>
        <h6 class="mb-4">HOME > ROOMS</h6>
        <div class="row mb-4">
            <div class="col-md-6 mr-4">
                <img src="{{ asset('upload/rooms/'. $room->img) }}" class="img-fluid rounded">
            </div>

            <div class="col-md-4 ml-4 bg-white myshadow">
                <h4 class="mt-2 mb-2">BOOKING DETAILS</h4>

                <form action="/confirm_booking/{{$room->id}}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="number" name="phone" class="form-control shadow-none" required>
                        </div>
                    </div>

                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control shadow-none mb-3" rows="1" required></textarea>

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" style="font-weight:500;">Check In</label>
                            <input type="date" name="checkin" class="form-control shadow-none" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" style="font-weight:500;">Check Out</label>
                            <input type="date" name="checkout" class="form-control shadow-none" required>
                        </div>
                    </div>

                    <h6 class="mb-3 text-danger" id="pay_info">Provide Check-in & Check-Out</h6>

                    <button type="submit" class="btn w-100 mt-2 mb-3" style="background-color: #61e99a;">PAY NOW</button>
                </form>

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

    <script>
        // Pass the room price to the external script file
        var roomPrice = @json($room->price);
    </script>

</x-layout>
