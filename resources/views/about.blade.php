<x-layout>
    <div class="my-5 px-4">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">About Us</h2>
        <hr>
        <div class="h-line"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
            Ab, porro tenetur asperiores dolor, unde nulla voluptatibus eius, voluptatem cumque consectetur quod!<br>
            Numquam inventore doloremque rerum voluptate voluptatibus, quam vitae quaerat.</p>
    </div>

    <div class="container mb-5 bg-light">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 ml-3">
                <h3 class="mb-3">Mahin Chowdhury</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi aspernatur quae, odio dolores reiciendis delectus, omnis doloremque et, totam distinctio inventore voluptas libero? Unde soluta earum in repellat natus tempora?</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4">
                <img src="{{asset('images/about/profileMahin.jpg')}}" alt="ProfilePicMahin" class="w-100">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="text-center bg-white rounded myshadow p-4 border-top border-4 about-box">
                    <img src="{{asset('images/about/hotel.svg')}}" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="text-center bg-white rounded myshadow p-4 border-top border-4 about-box">
                    <img src="{{asset('images/about/customers.svg')}}" width="70px">
                    <h4 class="mt-3" style="font-size : 1.3rem">250+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="text-center bg-white rounded myshadow p-4 border-top border-4 about-box">
                    <img src="{{asset('images/about/rating.svg')}}" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="text-center bg-white rounded myshadow p-4 border-top border-4 about-box">
                    <img src="{{asset('images/about/staff.svg')}}" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Management Team</h2>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{asset('images/about/team.jpg')}}" alt="" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{asset('images/about/team.jpg')}}" alt="" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{asset('images/about/team.jpg')}}" alt="" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{asset('images/about/team.jpg')}}" alt="" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{asset('images/about/team.jpg')}}" alt="" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    @include('partials._swiper2');

</x-layout>
