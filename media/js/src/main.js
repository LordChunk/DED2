console.log("Main.js loaded.");

$(document).ready(function(){
    pageInit();
});


function pageInit() {
    //Initiate Materialize items
    $('.sidenav').sidenav();
    $('select').formSelect();

    $('.datepicker').datepicker({
        format: "yyyy-mm-dd"
    });

    /*
        Nav dropdown only 
        Disables hover trigger on mobile and allows container to resize properly for mobile 
    */

    if($(window).width() < 992) {
        //Mobile settings
        $(".nav-dropdown-trigger").dropdown({coverTrigger: false , constrainWidth: false});
    } else {
        //Desktop settings
        $(".nav-dropdown-trigger").dropdown({coverTrigger: false});
    }
}