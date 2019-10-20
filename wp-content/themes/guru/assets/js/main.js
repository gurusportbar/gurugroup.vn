$('#carouselMain').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    dots: false,
    nav: true,
    autoplayTimeout: 2000,
    responsive: {
        320: {
            items: 1
        }
    }
});


$('#carouselInfoCompany').owlCarousel({
    loop: true,
    margin: 6,
    autoplay: false,
    dots: true,
    nav: true,
    autoplayTimeout: 2000,
    responsive: {
        1024: {
            items: 3
        }
    }
});