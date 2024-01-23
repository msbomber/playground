document.addEventListener('DOMContentLoaded', function() {
    var splideElementRecent = document.getElementById('recent_slider');
    if (splideElementRecent) {
        var splideRecent = new Splide(splideElementRecent, {
            type: 'loop',
            perPage: 2.5,
            perMove: 1,
            arrows: true,
            pagination: false,
            gap: 24,
            breakpoints: {
                600: {
                    perPage: 1.2,
                    perMove: 1,
                    pagination: false,
                }
            }
        });
    
        splideRecent.mount();
    }
    
    var splideElement = document.getElementById('top_slider');
    if (splideElement) {
        var splide = new Splide(splideElement, {
            type   : 'loop',
            perPage: 4,
            perMove: 1,
            arrows: false,
            pagination: true,
            breakpoints: {
                600: {
                    perPage: 1,
                    perMove: 1,
                    pagination: true,
                }
            }
        });
        splide.mount();
    }
});
