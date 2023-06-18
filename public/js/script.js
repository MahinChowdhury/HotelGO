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



console.log("Connected.");
