$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });

$('.owl-carousel').owlCarousel({
loop:true,
margin:10,
responsiveClass:true,
responsive:{
    0:{
        items:1,
        nav:true
    },
    400:{
        items:2,
        nav:false
    },
    500:{
        items:3,
        nav:false
    },
    1000:{
        items:5,
        nav:true,
        loop:false
    }
}
})

//nav links
navbar_links = document.querySelectorAll("nav.navbar a.nav-link");
console.log(navbar_links);
console.log("hello")
