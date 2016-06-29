$(document).ready(function() {

    $('.examples img').mouseover(
        function() {
                var id = $(this).attr("id");
                $('.ct' + id).toggle('slide');
                $('#t' + id).toggle('slide');
        }
    );
-

    $('.top').mouseleave(
        function() {
                var id = $(this).attr("id");
                $('.c' + id).toggle('blind');
                $(this).toggle('blind');
        }
    );

    if(!$('.top').is(':hover')) {
        if($('.top').css('display') == 'none')
        {
            var id = $(this).attr("id");
            $('.c' + id).toggle('blind');
            $(this).toggle('blind');
        }
    };
});