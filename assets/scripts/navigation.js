jQuery('.menu-button').click(function() {

  var selectClasses = [
    '.main-wrapper',
    '.nav-side'
  ].join(', ');

  jQuery(selectClasses).toggleClass('on');
});

jQuery('.toggle-post').click(function(event) {
	if (!document.querySelector('.toggle-post')) { return;}
	event.stopPropagation();
	var postMargin = document.querySelector('.single_post').style.marginTop;
	var bgImgHeight = jQuery('.background-image-wrapper').height();
	
	if (postMargin == '' || postMargin == '0px') {
		document.querySelector('.single_post').style.marginTop = (bgImgHeight - 240) + 'px';
		jQuery('.toggle-post > .glyphicon').detach();
		jQuery('.toggle-post').append('<span class="glyphicon glyphicon-menu-up"></span>');
	} else {
		document.querySelector('.single_post').style.marginTop = '0px';
		jQuery('.toggle-post > .glyphicon').detach();
		jQuery('.toggle-post').append('<span class="glyphicon glyphicon-menu-down"></span>');
	}

});

jQuery('body').click(function(event) {
	document.querySelector('.single_post').style.marginTop = '0px';
	jQuery('.toggle-post > .glyphicon').detach();
	jQuery('.toggle-post').append('<span class="glyphicon glyphicon-menu-down"></span>');
});
