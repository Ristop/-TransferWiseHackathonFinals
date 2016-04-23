jQuery(document).ready(function(){
    jQuery("#button1").click(function(){
        $('#button1').addClass( "btn-primary" );
        $('#button2').removeClass( "btn-primary" );
        $('#button3').removeClass( "btn-primary" );
    })
    jQuery("#button2").click(function(){
        $('#button1').removeClass( "btn-primary" );
        $('#button2').addClass( "btn-primary" );
        $('#button3').removeClass( "btn-primary" );
    })
    jQuery("#button3").click(function(){
        $('#button1').removeClass( "btn-primary" );
        $('#button2').removeClass( "btn-primary" );
        $('#button3').addClass( "btn-primary" );
    })
});
