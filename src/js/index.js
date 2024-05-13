$(document).on('click','#menuButton',function(){
    if($('#menu').is(":hidden")) {
        $('#menu').show();
        return;
    }

    $('#menu').hide();
});


$(document).on('click','#sendUserBtn',function(){
    $.post( "/api/user.php", { 
            'first_name': $('#grid-first-name').val(), 
            'last_name': $('#grid-last-name').val(),
            password: $('#grid-password').val(),
            city: $('#grid-city').val(),
            state: $('#grid-state').val(),
            zip: $('#grid-zip').val() 
        })
        .done(function( data ) {
            alert( "Data sent successfully " + data );
        });
});