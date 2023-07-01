var grid = document.querySelector('.grid');
var iso;

imagesLoaded( grid, function() {
  iso = new Isotope( grid, {
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });
});

// Bind filter button click
var filtersElemDesktop = document.querySelector('.js-filter-desktop');
filtersElemDesktop.addEventListener( 'click', function( event ) {
  var filterValue = event.target.getAttribute('data-filter');
  iso.arrange({ filter: filterValue });
});

var filtersElemMobile = document.querySelector('.js-filter-mobile');
filtersElemMobile.addEventListener( 'click', function( event ) {
  var filterValue = event.target.getAttribute('data-filter');
  iso.arrange({ filter: filterValue });
});

// Change .is-checked class
var buttonGroupsDesktop = document.querySelectorAll('.js-filter-desktop');
for ( var i=0, len = buttonGroupsDesktop.length; i < len; i++ ) {
  var buttonGroupDesktop = buttonGroupsDesktop[i];
  radioButtonGroup( buttonGroupDesktop );
}

var buttonGroupsMobile = document.querySelectorAll('.js-filter-mobile');
for ( var i=0, len = buttonGroupsMobile.length; i < len; i++ ) {
  var buttonGroupMobile = buttonGroupsMobile[i];
  radioButtonGroup( buttonGroupMobile );
}

function radioButtonGroup( buttonGroupDesktop ) {
  buttonGroupDesktop.addEventListener( 'click', function( event ) {
    if ( !matchesSelector( event.target, 'button' ) ) {
      return;
    }
    buttonGroupDesktop.querySelector('.is-checked').classList.remove('is-checked');
    event.target.classList.add('is-checked');
  });
}

function radioButtonGroup( buttonGroupMobile ) {
  buttonGroupMobile.addEventListener( 'click', function( event ) {
    if ( !matchesSelector( event.target, 'button' ) ) {
      return;
    }
    buttonGroupMobile.querySelector('.is-checked').classList.remove('is-checked');
    event.target.classList.add('is-checked');
  });
}
