$(".multiple-item").slick({
    dots: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: false,
            },
        },
        {
            breakpoint: 641,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
            },
        }
    ]
});
