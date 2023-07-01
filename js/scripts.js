$(window).load(function() {
  $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    autoHeight: true
  });
});

fluidvids.init({
  selector: ['iframe'],
  players: ['www.youtube.com', 'player.vimeo.com']
});

window.onscroll = function() {
  myFunction();
};

function myFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    document.getElementById("js-menu").className = "menu menu-scrolled";
  } else {
    document.getElementById("js-menu").className = "menu menu-top";
  }
}
