$(document).ready(function(){

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
});

const artikelNav = document.querySelectorAll('.nav-link')

function removeActive(){
    for(artikel in artikelNav){
        artikel.classList.remove('active');
    }
}

for(artikel in artikelNav){
    artikel.addEventListener('click', function() {
        console.log('masuk');
        removeActive();
        artikel.classList.add('active');
    })
}
