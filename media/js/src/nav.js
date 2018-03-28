$(document).ready(function () {
    console.log("Nav Loaded");

    //Set original top CSS value for mobile nav bar
    $('#side-nav').css("top", -$('#side-nav').height());

    //Navbar animation
    //Navbar now also closes when clicking any other item withing the nav bar
    $('#close_mobile_nav, #side-nav *').click(function () {
        $('#side-nav').animate({"top": -$('#side-nav').height()}, "slow"); //This moves the nav bar above the nav bar + landing page height
    });

    //Do redirect for desktop and open nav bar for mobile
    if ($(window).width() < 800)
    {
        //Change attribute href and check for click event
        $('#open_mobile_nav').click(function () {
            $('#side-nav').animate({"top": 0}, "slow");
        });
    }
    else
    {
        //Make logo element clickable as home button for desktop version
        $("#open_mobile_nav").attr("href", "/");
    }
});

