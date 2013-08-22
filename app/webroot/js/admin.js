$(function(){


    //Enable fancybox
    if($.fn.fancybox){
        $('.fancybox').fancybox({
            live: true,
            helper: {
                title: {
                    type: 'inline'
                }
            },
            openEffect: 'elastic',
            closeEffect: 'elastic'
        });
    }

    //Enable lazyload
    if($.fn.lazyload){
        $('img.lazy').lazyload({
            'effect': 'fadeIn'
        });
    }
})
