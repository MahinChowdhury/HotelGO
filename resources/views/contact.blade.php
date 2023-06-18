<x-layout>
    <div class="my-5 px-4">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>
        <hr>
        <div class="h-line"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
            Ab, porro tenetur asperiores dolor, unde nulla voluptatibus eius, voluptatem cumque consectetur quod!<br>
            Numquam inventore doloremque rerum voluptate voluptatibus, quam vitae quaerat.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-2 bg-white rounded myshadow p-4">
                <iframe class="w-100 rounded myshadow mb-4" height="300px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.3474395064654!2d89.50016781504463!3d22.900552385015065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9bda1d0ff6e5%3A0x123a926908efcd0c!2sKhulna%20University%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sbd!4v1679671506066!5m2!1sen!2sbd" loading="lazy"></iframe>
                <h5>Address</h5>
                <a href="https://goo.gl/maps/Z64V3andjSbCWWTZ9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-4"><i class="fa-solid fa-location-dot mr-2"></i>KUET,Khulna,Bangladesh</a>
                <h5>Call US : </h5>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="fa-solid fa-phone"></i>+8801839963763</a>
                <br>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="fa-solid fa-phone"></i>+8801521583700</a>

                <h5 class="mt-3">Email : </h5>
                <a href="mailto: ask.mahin00021@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">mahin00021@gmail.com</a>

                <h5 class="mt-3">Follow Us : </h5>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark mr-2"><i class="fab fa-facebook-f"></i></a>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark mr-2"><i class="fab fa-twitter"></i></a>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark mr-2"><i class="fab fa-instagram"></i></a>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark mr-2"><i class="fab fa-twitch"></i></a>
            </div>
            <div class="col-lg-6 col-md-2 px-4">
                <div class="bg-white rounded myshadow p-4">
                    <form action="/userqueries" method="POST">
                        @csrf
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input name="email" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn text-white bg-primary mt-3">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
