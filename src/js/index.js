$(document).on('click','#menuButton',function(){
    if($('#menu').is(":hidden")) {
        $('#menu').show();
        return;
    }

    $('#menu').hide();
});