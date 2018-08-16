jQuery(document).ready(function($) {

    $(document).on('click', '.load-more', function() {

        var page = $(this).data('page');
        var ajaxurl = $(this).data('url');

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
                $('.gallery-container').append( response );
            }
        });
    });   
});