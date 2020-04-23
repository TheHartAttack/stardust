jQuery(document).ready(function($){

    let mainHeight = $('header').outerHeight() + $('#page-hero').outerHeight() + $('footer').outerHeight();
    $('#main-container').css('min-height', 'calc(100vh - '+mainHeight+'px)');

    $('.menu-button').on('click', function(){
        $('header').toggleClass('active');
        $('.menu').toggleClass('menu-open');
        $('.menu-button').toggleClass('menu-button-open');
    })

    $('section#home-hero > .arrow').on('click', function(){
        let position = document.getElementById('main-container').offsetTop;
        $('html, body').animate({
            scrollTop: position
        }, 1000);
    })

    function resizeHomePoster(){
        let screenWidth = $(window).width();
        if (screenWidth > 1200){
            let posterHeight = $('a.home-lineup:last-of-type>div.home-lineup-image').height();
            let posterWidth = '1fr '+(posterHeight/4)*3+'px';
            $('div#home-lineup-wrapper').css('grid-template-columns', posterWidth);
            $('a.home-lineup:last-of-type>div.home-lineup-image').css('height', 'calc(100vh - 80px)');
        } else {
            let posterWidth = $('#home-lineup-wrapper').width();
            let posterHeight = (posterWidth/3)*4+'px';
            $('div#home-lineup-wrapper').css('grid-template-columns', '1fr');
            $('a.home-lineup:last-of-type>div.home-lineup-image').css('height', posterHeight);
        }
    };
    resizeHomePoster();

    $('#history-inner a').on('click', function(e){
        e.preventDefault();
        let image = $(this).find('.article-image').css('background-image');
        image = image.substr(5)
        image = image.slice(0, -2);
        $('#poster').find('img').attr('src', image);
        $('body').css('overflow', 'hidden');
        $('#poster').fadeIn();
    });

    $('#poster').on('click', function(e){
        if (e.target != this){
            return;
        }
        $('body').css('overflow', 'unset');
        $('#poster').fadeOut();
    });

    $('.poster-close').on('click', function(){
        $('body').css('overflow', 'unset');
        $('#poster').fadeOut();
    });

    $('#poster img').on('click', function(){
        $(this).toggleClass('full-size');
    });

    $('div.lineup-poster-toggle').on('click', function(){
       $('div.lineup-poster-list').removeClass('toggle-list').addClass('toggle-poster');
       $('div.lineup-list').removeClass('active');
       $('div.lineup-poster').addClass('active');
    });

    $('div.lineup-list-toggle').on('click', function(){
       $('div.lineup-poster-list').removeClass('toggle-poster').addClass('toggle-list');
       $('div.lineup-poster').removeClass('active');
       $('div.lineup-list').addClass('active');
     });

    function newsImageSize(){
        let newsImageWidth = $('.news-image').width();
        let articleWidth = $('a.news-article').width();
        $('.news-image').height(newsImageWidth*0.75);
        $('a.news-article').height(articleWidth);
    };
    newsImageSize();

    $(window).on('resize', function(){
        resizeHomePoster();
        newsImageSize();
    });

});