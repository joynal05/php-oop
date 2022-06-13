(function ($) {
    "use strict";
    $(document).ready(function () {

        var content_height = $(window).height() - ( $('header.site-header').height() + $('footer.site-footer').height() );
        

        $('.site-content').css('min-height', content_height );






    });
}(jQuery));