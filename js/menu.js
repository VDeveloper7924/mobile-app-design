$('.backBtn').click(function() {
    $('.menu').removeClass('top-open bottom-open right-open left-open pushleft-open pushright-open');
    $('body').removeClass('push-toleft push-toright');
  });
  
  $('body').addClass('push');
  
  $('#showLeftPush').click(function () {
    $('body').toggleClass('push-toleft');
    $('.push-left').toggleClass('pushleft-open');
  });