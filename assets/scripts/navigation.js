jQuery('.menu-button').click(function() {
  var selectClasses = [
    '.main-wrapper',
    '.nav-side' 
  ].join(', ');
  jQuery(selectClasses).toggleClass('on');
});
