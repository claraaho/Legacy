(function ($) {
    alertBox();

    //Hover on programs for desktop view
    function alertBox() {
        $('.test').click(function(){
            alert( 'Handler for .click() called.' );
        });
    }

})(jQuery);