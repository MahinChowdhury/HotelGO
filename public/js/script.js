const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtn_icon = document.querySelector('.toggle_btn i');
const dropdownMenu = document.querySelector('.dropdown_menu');

// let dropdownMenu_cick = 0;
// dropdownMenu.setAttribute('style',"height : 0px");
//
// //Function for dropdown
// toggleBtn.onclick = () =>{
//     console.log("clicked");
//     dropdownMenu_cick++;
//     if(dropdownMenu_cick%2){
//         toggleBtn_icon.classList = 'fa-solid fa-xmark';
//         dropdownMenu.setAttribute('style',"height : 400px");
//     }
//     else{
//         toggleBtn_icon.classList = 'fa-solid fa-bars';
//         dropdownMenu.setAttribute('style',"height : 0px");
//     }
// }


// Toggle the profile menu

$(document).ready(function() {
    $('.profile-button').click(function(e) {
        e.stopPropagation();
        $('.profile-menu').toggle();
    });

    $(document).click(function() {
        $('.profile-menu').hide();
    });
});


// For video sliders

//Javacript for video slider navigation

const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".homecontent");

console.log(btns);
console.log(slides);
console.log(contents);

let sliderNav = function (manual) {
    btns.forEach((btn) => {
        btn.classList.remove("active");
    });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    contents.forEach((content) => {
        content.classList.remove("active");
    });

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
};

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
    });
});

// Testimonial section


//For user profile toggle


//Confirm_booking section

// Get the check-in and check-out input elements


// Use the room price in your JavaScript code
console.log(roomPrice);
// Rest of your JavaScript code that uses the room price

const checkinInput = document.querySelector('input[name="checkin"]');
const checkoutInput = document.querySelector('input[name="checkout"]');
const payInfo = document.getElementById('pay_info');
payInfo.style.display = 'none';

// Add event listeners to the input elements
checkinInput.addEventListener('input', showPayInfo);
checkoutInput.addEventListener('input', showPayInfo);

// Function to show the pay info element
function showPayInfo() {

    // Check if both check-in and check-out inputs have values

    if (checkinInput.value && checkoutInput.value) {

        if(checkinInput.value >= checkoutInput.value){
            payInfo.textContent = 'Provide valid Check-In & Check-Out dates.';
        }
        else{
            let cnt_days = (new Date(checkoutInput.value) - new Date(checkinInput.value)) / (1000 * 60 * 60 * 24);
            let price = cnt_days * roomPrice;
            payInfo.textContent = "Total amount to pay: $" + price;
        }

        payInfo.style.display = 'block'; // Show the pay info element
    }
}

// Toggle the profile menu

//SSL Commerz payment gateway

    (function (window, document) {
    var loader = function () {
    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
    tag.parentNode.insertBefore(script, tag);
};

    window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);




console.log("Connected.");
