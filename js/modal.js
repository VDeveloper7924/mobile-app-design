$('.page-search img').on('click', function(e) {
    e.preventDefault();
    console.log(e.which);

    let imageUrl = e.target.getAttribute('src')
    let targetImage = document.querySelector('.explorer .content-slidebar img');
    targetImage.setAttribute('src', imageUrl);
    $('.explorer').toggleClass('show-ex');
    $('.page-search').hide()
});

$('.explorer .back-arrow').on('click', function(e) {
  $('.page-search').show()
  $('.explorer').toggleClass('show-ex');
});