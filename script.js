let userBox = document.querySelector('.user-box');

document.querySelector('#user-button').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
   searchform.classList.remove('active');
   cartitem.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#bars').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
   searchform.classList.remove('active');
   cartitem.classList.remove('active');
}

let searchform=document.querySelector('.search-form');

document.querySelector('#search').onclick = () =>{
    searchform.classList.toggle('active');
    navbar.classList.remove('active');
    userBox.classList.remove('active');
    cartitem.classList.remove('active');
}

let cartitem=document.querySelector('.container');

document.querySelector('#cart').onclick = () =>{
    cartitem.classList.toggle('active');
    userBox.classList.remove('active');
    navbar.classList.remove('active');
    searchform.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');
   searchform.classList.remove('active');
   cartitem.classList.remove('active');
   

   if(window.scrollY > 60){
    document.querySelector('.header ').classList.add('active');
 }else{
    document.querySelector('.header ').classList.remove('active');
 }
}


var swiper = new Swiper(".slider", {
  loop:true,
  spaceBetween: 20,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1020: {
      slidesPerView: 3,
    },
    
  },
});