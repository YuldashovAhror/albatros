//___________MOBILE MENU___________

$('.header-nav__mobi').click(function() {
    $(this).toggleClass('header-nav__mobi-open')
    $('.mobile-menu').slideToggle(400)
})


//___________FOOTER-TOP___________

$('.footer-top').click(() => {
    $(document).scrollTop(0)
})



 //_____________DEVELOPER_________________

$('.dev-open').click(e => {
    e.preventDefault()
    $('.dev').fadeIn(600); 
})

$('.dev__close').click(() => {
    $('.dev').fadeOut(600); 
})

$('.dev').click(e => {
    let div = $(".dev-content");
    if (!div.is(e.target) 
        && div.has(e.target).length === 0) { 
        $('.dev').fadeOut(600); 
    }
})

 //_____________FEEDBACK_________________

 $('.feedback-open').click(e => {
    e.preventDefault()
    $('.feedback').fadeIn(600); 
})


if($(window).width() > 768) {
    $('.tel-popup').click(e => {
        e.preventDefault()
        $('.feedback').fadeIn(600); 
    })
}


$('.feedback__close').click(() => {
    $('.feedback').fadeOut(600); 
    $('.feedback-vacancy').fadeOut(600); 
})


$('.feedback').click(e => {
    let div = $(".feedback-content");
    if (!div.is(e.target) 
        && div.has(e.target).length === 0) { 
        $('.feedback').fadeOut(600); 
    }
})


$('.personal-btn').click(function(e) {
    e.preventDefault();
    let vacancy = $(this).parents('.knowledge-tab__item').find('.knowledge-tab__name').text();
    $('.feedback-vacancy').fadeIn(600);
    $('.feedback-vacancy__name span').text(vacancy)
})


$('.feedback-vacancy').click(e => {
    let div = $(".feedback-content");
    if (!div.is(e.target) 
        && div.has(e.target).length === 0) { 
        $('.feedback-vacancy').fadeOut(600); 
    }
})


//___________MAIN-CAROUSEL___________

let dots = event => {
    if (!event.namespace) {
        return;
    }
    let slides = event.relatedTarget;
    $('.main-dots li').removeClass('active');
    $('.main-dots li').eq(slides.current()-3).addClass('active');
}


$('.main-carousel').owlCarousel({
    dots: false,
    nav: false,
    mouseDrag: false,
    smartSpeed: 700,
    loop: true,
    items: 1,
    onInitialized: dots,
    onChanged: dots,
    autoplay: true,
    autoplayTimeout: 4000,
    lazyLoad: true,
    responsive: {
        0 : {
            stagePadding: 20,
            margin: 20,
        },
        768 : {
            stagePadding: 105,
            margin: 20,
        },
        1100 : {
            stagePadding: 205,
            margin: 20,
        },
        1400: {
            stagePadding: 270,
            margin: 30
        },
        1700: {
            stagePadding: 340,
            margin: 30
        }
    }
})

$('.main-dots li').click(function(e) {
    let index = $(this).index('.main-dots li')
    $('.main-dots li').removeClass('active')
    $(this).addClass('active')
    $('.main-carousel').trigger('to.owl.carousel',  [index, 700])
    $('.main-carousel').trigger('stop.owl.autoplay')
})



//___________PRODUCT-CAROUSEL___________

let activeItems = event => {
    if (!event.namespace) {
        return;
    }
    setTimeout(() => {
        let activeItemLength = $('.product-carousel .active').length;
        $('.product-carousel .owl-item').removeClass('activeItem')
        $('.product-carousel .active').addClass('activeItem')
        if ($(window).width() >= 900) {
            $('.product-carousel .active').eq(0).removeClass('activeItem')
            $('.product-carousel .active').eq(activeItemLength-1).removeClass('activeItem')
        }
    }, 500)
   
    // $('.product-carousel .active').eq(0).removeClass('activeItem')
}

$('.product-carousel').owlCarousel({
    dots: false,
    nav: false,
    mouseDrag: false,
    smartSpeed: 700,
    startPosition: 1,
    loop: true,
    lazyLoad: true,
    onInitialized: activeItems,
    onChanged: activeItems,
    afterMove: activeItems,
    responsive: {
        0 : {
            margin: 20,
            items: 1,
            stagePadding: 50
        },
        550 : {
            margin: 20,
            items: 4,
        },
        900 : {
            items: 5,
            margin: 30,
        },
        1300: {
            margin: 30,
            items: 6,
        }
    }
})


$('.product-arrow__left').click(() => {
    $('.product-carousel').trigger('prev.owl.carousel', [700]);
})

$('.product-arrow__right').click(() => {
    $('.product-carousel').trigger('next.owl.carousel', [700]);
})



//___________TIMELINE-CAROUSEL___________


$('.timeline-seminar').css('display', 'block')
$('.timeline-type__seminar').addClass('active')

$('.timeline-type__seminar').click(() => {
    $('.timeline-type__event').removeClass('active')
    $('.timeline-type__seminar').addClass('active')
    $('.timeline-event').css('display', 'none')
    $('.timeline-seminar').css('display', 'block')
    showTimelineYear($('.timeline-years span').length-1)
})

$('.timeline-type__event').click(() => {
    $('.timeline-type__seminar').removeClass('active')
    $('.timeline-type__event').addClass('active')
    $('.timeline-seminar').css('display', 'none')
    $('.timeline-event').css('display', 'block')
    showTimelineYear($('.timeline-years span').length-$('.timeline-event .timeline-years span').length-1)
})

let showTimelineYear = index => {
    $('.timeline-years span').removeClass('active')
    $('.timeline__year').css('display', 'none')
    $('.timeline__year').removeClass('timeline__year-active')
    $('.timeline__year').css('opacity', '0')
    $('.timeline-years span').eq(index).addClass('active')
    $('.timeline__year').eq(index).css('display', 'block')
    $('.timeline__year').eq(index).addClass('timeline__year-active')
    setTimeout(() => {
        $('.timeline__year').eq(index).css('opacity', '1')
    }, 500)
}




showTimelineYear($('.timeline-years span').length-1)



$('.timeline-years span').click(function() {
    let index = $(this).index('.timeline-years span')
    showTimelineYear(index)
})

let timelineItems = event => {
    if (!event.namespace) {
        return;
    }
    setTimeout(() => {
        let activeItemLength = $('.timeline__year-active .timeline-carousel .active').length;
        if(activeItemLength < 3) {
            $('.timeline__year-active .timeline-carousel .owl-item').addClass('activeItem')
            $('.timeline__year-active .timeline-carousel .owl-nav').css('display', 'block')
        } else {
            $('.timeline__year-active .timeline-carousel .owl-item').removeClass('activeItem')
            $('.timeline__year-active .timeline-carousel .active').addClass('activeItem')
            $('.timeline__year-active .timeline-carousel .owl-nav').css('display', 'block')
            if ($(window).width() >= 900) {
                $('.timeline__year-active .timeline-carousel .active').eq(activeItemLength-1).removeClass('activeItem')
            }
        }
    }, 500)
   
    // $('.product-carousel .active').eq(0).removeClass('activeItem')
}



$('.timeline-carousel').owlCarousel({
    dots: false,
    nav: true,
    mouseDrag: false,
    smartSpeed: 700,
    items: 1,
    onInitialized: timelineItems,
    onChanged: timelineItems,
    afterMove: timelineItems,
    navText: [
        `<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.4998 16.9999C13.4991 16.8683 13.5243 16.7379 13.574 16.616C13.6238 16.4942 13.6971 16.3834 13.7898 16.2899L17.7898 12.2899C17.8831 12.1967 17.9937 12.1227 18.1156 12.0723C18.2374 12.0218 18.368 11.9958 18.4998 11.9958C18.6317 11.9958 18.7622 12.0218 18.8841 12.0723C19.0059 12.1227 19.1166 12.1967 19.2098 12.2899C19.3031 12.3832 19.377 12.4939 19.4275 12.6157C19.4779 12.7375 19.5039 12.8681 19.5039 12.9999C19.5039 13.1318 19.4779 13.2624 19.4275 13.3842C19.377 13.506 19.3031 13.6167 19.2098 13.7099L15.8998 16.9999L19.0798 20.2999C19.1821 20.3919 19.2643 20.504 19.3213 20.6293C19.3783 20.7545 19.4088 20.8901 19.411 21.0276C19.4132 21.1652 19.387 21.3017 19.334 21.4287C19.281 21.5556 19.2024 21.6703 19.103 21.7655C19.0037 21.8607 18.8858 21.9343 18.7567 21.9819C18.6276 22.0294 18.4901 22.0498 18.3528 22.0418C18.2154 22.0338 18.0812 21.9975 17.9586 21.9352C17.8359 21.873 17.7274 21.7861 17.6398 21.6799L13.7798 17.6799C13.6035 17.4971 13.5034 17.2539 13.4998 16.9999Z" fill="white"/>
        </svg>  
        `,
        `
        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.5 20.9999C14.4992 20.8683 14.5244 20.7379 14.5742 20.616C14.624 20.4942 14.6973 20.3834 14.79 20.2899L18.1 16.9999L14.92 13.6999C14.7337 13.5126 14.6292 13.2591 14.6292 12.9949C14.6292 12.7308 14.7337 12.4773 14.92 12.2899C15.0129 12.1962 15.1235 12.1218 15.2454 12.071C15.3673 12.0203 15.498 11.9941 15.63 11.9941C15.762 11.9941 15.8927 12.0203 16.0146 12.071C16.1364 12.1218 16.247 12.1962 16.34 12.2899L20.2 16.2899C20.3832 16.4769 20.4858 16.7282 20.4858 16.9899C20.4858 17.2517 20.3832 17.503 20.2 17.6899L16.2 21.6899C16.107 21.7837 15.9964 21.8581 15.8746 21.9088C15.7527 21.9596 15.622 21.9857 15.49 21.9857C15.358 21.9857 15.2273 21.9596 15.1054 21.9088C14.9835 21.8581 14.8729 21.7837 14.78 21.6899C14.6013 21.5046 14.501 21.2574 14.5 20.9999Z" fill="white"/>
        </svg>

        `

    ],
    responsive: {
        0 : {
            margin: 20,
            items: 1,
            stagePadding: 50
        },
        550 : {
            margin: 20,
            items: 4,
        },
        900 : {
            items: 5,
            margin: 30,
        },
        1300: {
            margin: 30,
            items: 6,
        }
    }
})




//___________FOREIGN-CAROUSEL___________

let foreignItems = event => {
    if (!event.namespace) {
        return;
    }
    setTimeout(() => {
        let activeItemLength = $('.foreign-carousel .active').length;
        $('.foreign-carousel .owl-item').removeClass('activeItem')
        $('.foreign-carousel .active').addClass('activeItem')
        if ($(window).width() >= 900) {
            $('.foreign-carousel .active').eq(0).removeClass('activeItem')
            $('.foreign-carousel .active').eq(activeItemLength-1).removeClass('activeItem')
        }
    }, 500)
   
    // $('.product-carousel .active').eq(0).removeClass('activeItem')
}

$('.foreign-carousel').owlCarousel({
    dots: false,
    nav: false,
    mouseDrag: false,
    smartSpeed: 700,
    items: 1,
    loop: true,
    onInitialized: foreignItems,
    onChanged: foreignItems,
    afterMove: foreignItems,
    responsive: {
        0 : {
            margin: 20,
            items: 1,
            stagePadding: 50
        },
        550 : {
            margin: 20,
            items: 4,
        },
        900 : {
            items: 5,
            margin: 30,
        },
        1300: {
            margin: 30,
            items: 6,
        }
    }

})

$('.foreign-carousel__left').click(() => {
    $('.foreign-carousel').trigger('prev.owl.carousel', [700]);
})

$('.foreign-carousel__right').click(() => {
    $('.foreign-carousel').trigger('next.owl.carousel', [700]);
})




//__________PARTNERS-POPUP___________


$('.foreign-carousel__more').click(function() {

    let text = $(this).parents('.foreign-carousel__item').find('.foreign-carousel__popup').html();
    let src = $(this).parents('.foreign-carousel__item').find('.foreign-carousel__img img').attr('src');

    $('.partners-popup__logo img').attr('src', src)
    $('.partners-popup__text').html(text)
    $('.partners-popup').fadeIn(600)
})

$('.partners-popup__close').click(() => {
    $('.partners-popup').fadeOut(600)

    setTimeout(() => {
        $('.partners-popup__text').html('')
    }, 600)
})


$('.partners-popup').click(e => {
    let div = $(".partners-popup__content");
    if (!div.is(e.target) 
        && div.has(e.target).length === 0) { 
        $('.partners-popup').fadeOut(600); 

        setTimeout(() => {
            $('.partners-popup__text').html('')
        }, 600)
    }
})



//_________SCROLLSPY______________


let sectionIds = $('.section__nav a');

$(document).scroll(function(){
    sectionIds.each(function(){ 
        

        let container = $(this).attr('href');
        let containerOffset = $(container).offset().top;
        let containerHeight = $(container).outerHeight();
        let containerBottom = containerOffset + containerHeight;
        let scrollPosition = $(document).scrollTop()+$(window).height()/10;

        if(scrollPosition < containerBottom - 40 && scrollPosition >= containerOffset - 40){
            $(this).addClass('current');
        } else{
            $(this).removeClass('current');
        }

        if(scrollPosition < $(window).height()/4.5) {
            $('.section__nav a').removeClass('current')
            $('.section__nav a').eq(0).addClass('current')
        }


    });
});

$('.section-arrow__down').click(() => {
    if($('.section__nav .current').index('.section__nav a') == $('.section__nav a').length-1) {
        return false
    }
    let nextId = $('.section__nav .current').next().attr('href')
    $(document).scrollTop($(nextId).offset().top);
})

$('.section-arrow__up').click(() => {
    if($('.section__nav .current').index('.section__nav a') == 0) {
        return false
    }
    let prevId = $('.section__nav .current').prev().attr('href')
    $(document).scrollTop($(prevId).offset().top);
})


    //_________PRODUCT-GALLERY______________

    let showProductGallery = () => {
    let currentImage = $('.product-gallery__thumb .current img').attr('src')
    $('.product-gallery__img img').attr('src', currentImage)
    }

    showProductGallery()


    $('.product-gallery__thumb-img').click(function() {
    $('.product-gallery__thumb-img').removeClass('current')
    $(this).addClass('current')
    showProductGallery()
    })

//_________PRODUCT-TABS_____________

$('.product-tabs__nav-char').click(e => {
    e.preventDefault()
    $('.product-tabs__nav-video').removeClass('current')
    $('.product-tabs__nav-char').addClass('current')
    $('.product-tab__video').fadeOut(0)
    $('.product-tab__text').fadeIn(0)
})

$('.product-tabs__nav-video').click(e => {
    e.preventDefault()
    $('.product-tabs__nav-char').removeClass('current')
    $('.product-tabs__nav-video').addClass('current')
    $('.product-tab__text').fadeOut(0)
    $('.product-tab__video').fadeIn(0)
})

//________ZOOM IMAGE______________

$('.zoom-image').click(function() {
    let src = $(this).find('img').attr('src')

    $('.zoom-image-popup img').attr('src', src)
    $('.zoom-image-popup').fadeIn(500)
})

$('.zoom-image-popup__close').click(() => {
    $('.zoom-image-popup').fadeOut(500)
})

$('.zoom-image-popup').click(e => {
    let div = $(".zoom-image-popup img");
    if (!div.is(e.target) 
        && div.has(e.target).length === 0) { 
        $('.zoom-image-popup').fadeOut(600); 
    }
})




//________PERSONAL CAROUSEL______________


$('.personal-carousel').owlCarousel({
    dots: false,
    nav: true,
    mouseDrag: false,
    smartSpeed: 700,
    items: 1,
    autoWidth: true,
    navText: [
        `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.49981 11.9999C8.49905 11.8683 8.52428 11.7379 8.57404 11.616C8.62381 11.4942 8.69713 11.3834 8.78981 11.2899L12.7898 7.28994C12.8831 7.1967 12.9937 7.12274 13.1156 7.07228C13.2374 7.02182 13.368 6.99585 13.4998 6.99585C13.6317 6.99585 13.7622 7.02182 13.8841 7.07228C14.0059 7.12274 14.1166 7.1967 14.2098 7.28994C14.3031 7.38318 14.377 7.49387 14.4275 7.61569C14.4779 7.73751 14.5039 7.86808 14.5039 7.99994C14.5039 8.1318 14.4779 8.26237 14.4275 8.38419C14.377 8.50601 14.3031 8.6167 14.2098 8.70994L10.8998 11.9999L14.0798 15.2999C14.1821 15.3919 14.2643 15.504 14.3213 15.6293C14.3783 15.7545 14.4088 15.8901 14.411 16.0276C14.4132 16.1652 14.387 16.3017 14.334 16.4287C14.281 16.5556 14.2024 16.6703 14.103 16.7655C14.0037 16.8607 13.8858 16.9343 13.7567 16.9819C13.6276 17.0294 13.4901 17.0498 13.3528 17.0418C13.2154 17.0338 13.0812 16.9975 12.9586 16.9352C12.8359 16.873 12.7274 16.7861 12.6398 16.6799L8.77981 12.6799C8.6035 12.4971 8.50339 12.2539 8.49981 11.9999Z" fill="#21234A"/>
        </svg>
        
        `,
        `
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.49998 15.9999C9.49922 15.8683 9.52445 15.7379 9.57421 15.616C9.62398 15.4942 9.6973 15.3834 9.78998 15.2899L13.1 11.9999L9.91998 8.69994C9.73373 8.51258 9.62919 8.25912 9.62919 7.99494C9.62919 7.73075 9.73373 7.4773 9.91998 7.28994C10.0129 7.19621 10.1235 7.12182 10.2454 7.07105C10.3673 7.02028 10.498 6.99414 10.63 6.99414C10.762 6.99414 10.8927 7.02028 11.0146 7.07105C11.1364 7.12182 11.247 7.19621 11.34 7.28994L15.2 11.2899C15.3832 11.4769 15.4858 11.7282 15.4858 11.9899C15.4858 12.2517 15.3832 12.503 15.2 12.6899L11.2 16.6899C11.107 16.7837 10.9964 16.8581 10.8746 16.9088C10.7527 16.9596 10.622 16.9857 10.49 16.9857C10.358 16.9857 10.2273 16.9596 10.1054 16.9088C9.98355 16.8581 9.87295 16.7837 9.77998 16.6899C9.6013 16.5046 9.50101 16.2574 9.49998 15.9999Z" fill="white"/>
        </svg>

        `

    ]
})


//________SERT CAROUSEL______________


$('.sert-carousel').owlCarousel({
    dots: false,
    nav: true,
    mouseDrag: false,
    smartSpeed: 700,
    items: 1,
    autoWidth: true,
    navText: [
        `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.49981 11.9999C8.49905 11.8683 8.52428 11.7379 8.57404 11.616C8.62381 11.4942 8.69713 11.3834 8.78981 11.2899L12.7898 7.28994C12.8831 7.1967 12.9937 7.12274 13.1156 7.07228C13.2374 7.02182 13.368 6.99585 13.4998 6.99585C13.6317 6.99585 13.7622 7.02182 13.8841 7.07228C14.0059 7.12274 14.1166 7.1967 14.2098 7.28994C14.3031 7.38318 14.377 7.49387 14.4275 7.61569C14.4779 7.73751 14.5039 7.86808 14.5039 7.99994C14.5039 8.1318 14.4779 8.26237 14.4275 8.38419C14.377 8.50601 14.3031 8.6167 14.2098 8.70994L10.8998 11.9999L14.0798 15.2999C14.1821 15.3919 14.2643 15.504 14.3213 15.6293C14.3783 15.7545 14.4088 15.8901 14.411 16.0276C14.4132 16.1652 14.387 16.3017 14.334 16.4287C14.281 16.5556 14.2024 16.6703 14.103 16.7655C14.0037 16.8607 13.8858 16.9343 13.7567 16.9819C13.6276 17.0294 13.4901 17.0498 13.3528 17.0418C13.2154 17.0338 13.0812 16.9975 12.9586 16.9352C12.8359 16.873 12.7274 16.7861 12.6398 16.6799L8.77981 12.6799C8.6035 12.4971 8.50339 12.2539 8.49981 11.9999Z" fill="#21234A"/>
        </svg>
        
        `,
        `
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.49998 15.9999C9.49922 15.8683 9.52445 15.7379 9.57421 15.616C9.62398 15.4942 9.6973 15.3834 9.78998 15.2899L13.1 11.9999L9.91998 8.69994C9.73373 8.51258 9.62919 8.25912 9.62919 7.99494C9.62919 7.73075 9.73373 7.4773 9.91998 7.28994C10.0129 7.19621 10.1235 7.12182 10.2454 7.07105C10.3673 7.02028 10.498 6.99414 10.63 6.99414C10.762 6.99414 10.8927 7.02028 11.0146 7.07105C11.1364 7.12182 11.247 7.19621 11.34 7.28994L15.2 11.2899C15.3832 11.4769 15.4858 11.7282 15.4858 11.9899C15.4858 12.2517 15.3832 12.503 15.2 12.6899L11.2 16.6899C11.107 16.7837 10.9964 16.8581 10.8746 16.9088C10.7527 16.9596 10.622 16.9857 10.49 16.9857C10.358 16.9857 10.2273 16.9596 10.1054 16.9088C9.98355 16.8581 9.87295 16.7837 9.77998 16.6899C9.6013 16.5046 9.50101 16.2574 9.49998 15.9999Z" fill="white"/>
        </svg>

        `

    ]
})


//__________KNOWLEDGE SINGLE___________

$('.knowledge-tab__name').click(function(){
    let parent = $(this).parent()
    if(parent.hasClass('knowledge-tab__item-open')) {
        $('.knowledge-tab__item').removeClass('knowledge-tab__item-open')
    } else {
        $('.knowledge-tab__item').removeClass('knowledge-tab__item-open')
        parent.addClass('knowledge-tab__item-open')
    }
})

$('.knowledge__nav a').click(function() {
    let index = $(this).index('.knowledge__nav a')
    $('.knowledge__nav a').removeClass('current')
    $('.knowledge-tab').css('display', 'none')
    $(this).addClass('current')
    $('.knowledge-tab').eq(index).css('display', 'block')
})


// //__________LAZY_____

// $('.lazy').lazy()


//_____________INPUTMASK__________


$('.form__tel').inputmask("+\\9\\98 99 999 99 99")