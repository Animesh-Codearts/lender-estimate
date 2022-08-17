// JavaScript Document
jQuery('#custom-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

jQuery('#custom-tes-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});



jQuery('.raisonssection').owlCarousel({
margin:10,
nav:false,
items: 5,
lazyLoad: true,
nav:true,
responsive:{
0:{
  items:1,
},
600:{
  items:2,
},
1000:{
  items:4,
},
1200:{
  items:4,
},
}
});

