(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function() {
    $('#fullpage').fullpage({
      controlArrows: false,
    });
});

$('.nextSlide').on('click', function() {
  if ($("#cityIn").val().length > 0){
    $.fn.fullpage.moveSlideRight();
  } else{
    Materialize.toast('You MUST enter a city!', 4000);
  }
});

$('.submit').on('click', function() {
  if ($("#catIn").val().length > 0){
    window.location = "dick.html"
  } else{
    Materialize.toast('You MUST enter a category!', 4000);
  }
});


$(document).ready(function(){
    $('.collapsible').collapsible();
});

$('.ok').on('click', function() {
  $('.msgAfterInput').fadeOut();
});

$('.botBar').on('click', function(){
  if($('.footer').hasClass('pull')){
    $('.footer').removeClass('pull');
  } else {
    $('.footer').addClass('pull')
  }
});
