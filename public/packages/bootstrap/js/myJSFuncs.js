$(document).ready(function(){
    $('.form_error').tooltip();

    $('[rel=popover]').popover({
        html : true,
        content: function() {
            return $('#popover-content').html();
        }
    });
});