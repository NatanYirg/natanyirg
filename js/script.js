let Navbar = document.querySelector('.navbar');
let Fabars = document.querySelector('.fa-bars');



document.getElementById("form").addEventListener("submit", function(e) {
    e.preventDefault(); 
    
   
    var formData = new FormData(this);

   
    fetch('contact.php', { 
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});












Fabars.onclick = () =>{
    Navbar.classList.toggle("active")
};




var swiper = new Swiper(".home-slid", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});



var swiper = new Swiper(".team-slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      "0": {
        slidesPerView: 1,
        autoplay:{
            delay:700,
            disableOnInteraction:false,
        },
      },
      "768": {
        slidesPerView: 2,
          
      },
      "1020": {
        slidesPerView: 3,
          
      },
    },
  });
