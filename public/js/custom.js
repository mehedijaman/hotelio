$(document).ready(function(){
    $('.menu-btn').click(function () {
        $(this).next('.sub-btn').slideToggle('slow');
        $('.drop-down').toggleClass("rotated");
    });
});

// $('#menu-btn1').click(function(){
//     $(this).next('#sub-btn1').slideToggle('slow');
//     $('.drop-down').toggleClass('rotate');
//  });

        

