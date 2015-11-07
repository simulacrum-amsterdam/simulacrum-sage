function togglePost(event){
	if (event) {event.stopPropagation();}
	var postMargin = document.querySelector('.single_post').style.marginTop;
	var bgImgHeight = jQuery('.background-image-wrapper').height();
	if (postMargin == '' || postMargin == '-75px') {
		document.querySelector('.single_post').style.marginTop = (-bgImgHeight + 50) + 'px';
		jQuery('.toggle-post > .glyphicon').detach();
		jQuery('.toggle-post').append('<span class="glyphicon glyphicon-menu-down"></span>');
	} else {
		document.querySelector('.single_post').style.marginTop = '-75px';
		jQuery('.toggle-post > .glyphicon').detach();
		jQuery('.toggle-post').append('<span class="glyphicon glyphicon-menu-up"></span>');
	}
}

var bgContainer = document.querySelector('.background-image-wrapper');
imagesLoaded(bgContainer, function(){
	// Setting of event listeners for post scrolling
	if (document.querySelector('.toggle-post')) {
		if (jQuery('.background-image').height() < 500){
			return;
		} else {
			window.setTimeout(togglePost, 500);
			jQuery('.background-image, .toggle-post').click(togglePost);
		}
	}
	// Seperate handler for about
	if (document.querySelector('.about-container')) {
		if (jQuery('.background-image').height() < 500){
			return;
		} else {
			var offset = (-jQuery('.background-image').height() + 100);
			document.querySelector('.about-container').style.marginTop = offset + 'px';
		}
	}
	
});
