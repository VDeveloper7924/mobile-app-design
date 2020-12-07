$('.page-search img').mousedown( function(e) {
    e.preventDefault();
    console.log(e.which);

    let imageUrl = e.target.getAttribute('src');

    if (e.which === 1) {
      let targetImage = document.querySelector('.explorer .content-slidebar img');
      targetImage.setAttribute('src', imageUrl);
      $('.explorer').toggleClass('show-ex');
      $('.page-search').hide()
    } else if (e.which === 3) {
      let targetImage = document.querySelector('.modal-wrapper .model-image img');
      targetImage.setAttribute('src', imageUrl);
      $('.modal').addClass('is-visible');
    }
    else {
      $('.modal').removeClass('is-visible');
    }
});
$('body').on('click', function(e) {
  $('.modal').removeClass('is-visible');
});
$('.explorer .back-arrow').on('click', function(e) {
  $('.page-search').show()
  $('.explorer').toggleClass('show-ex');
});