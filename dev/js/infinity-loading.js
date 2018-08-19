jQuery(document).ready(function($) {

    revealPosts();



    $(document).on('click', '.load-more:not(.loading)', function() {

        var that = $(this);
        var page = that.data('page');
        var newPage = page+1;
        var ajaxurl = that.data('url');

        that.addClass('loading').find('.gallery__loading-text').slideUp(320);
        that.find('.gallery__loading-icon').addClass('spin');

        if($('.type-works_gallery').length) {
            $.ajax({

                url : ajaxurl,
                type : 'post',
                data : {
                    page : page,
                    action : 'gallery_load_more'
                },
                error : function( response ) {
                    console.log(response);
                },
                success : function( response ) {
    
    
                    setTimeout(function() {
                        that.data('page', newPage);
                        $('.gallery-container').append( response );
        
                        that.removeClass('loading').find('.gallery__loading-text').slideDown(320);
                        that.find('.gallery__loading-icon').removeClass('spin');  
                        
                        revealPosts();
    
    
                    }, 1500);
                }
            });
        } else {

            $.ajax({

                url : ajaxurl,
                type : 'post',
                data : {
                    page : page,
                    action : 'gallery_load_more_blog'
                },
                error : function( response ) {
                    console.log(response);
                },
                success : function( response ) {
    
    
                    setTimeout(function() {
                        that.data('page', newPage);
                        $('.gallery-container').append( response );
        
                        that.removeClass('loading').find('.gallery__loading-text').slideDown(320);
                        that.find('.gallery__loading-icon').removeClass('spin');  
                        
                        revealPosts();
    
    
                    }, 1500);
                }
            });            
        };
    });  


    
    // HELPER FUNCTIONS
    function revealPosts() {

        var posts = $('.gallery__wrap-items figure:not(.reveal)');
        var i = 0;

        setInterval(function() {

            if( i >= posts.length ) return false;

            var el = posts[i];
            $(el).addClass('reveal');
            i++;

        }, 200);


    }

});