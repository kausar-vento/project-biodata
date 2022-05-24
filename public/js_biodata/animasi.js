var i = 0;
$(document).ready(function(){
    $('#image img').hide();
    showNextImage();
    setInterval('showNextImage()', 3000);
});
function showNextImage(){
    i++;    
    $('#sliderImage' + i).appendTo('#image').fadeIn(1100).delay(1100).fadeOut(1100);
    if (i==2) {
        i=0;
    }
};