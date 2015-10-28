// jQuery('.menu-button').click(function() {

//   var selectClasses = [
//     '.main-wrapper',
//     '.nav-side'
//   ].join(', ');

//   jQuery(selectClasses).toggleClass('on');
// });

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

jQuery(document).ready(function(){
	if (document.querySelector('.toggle-post')) {
		console.log(jQuery('.background-image').height());
		if (jQuery('.background-image').height() < 500){
			console.log('smaller');
			return;
		} else {
			console.log('larger');
			window.setTimeout(togglePost, 500);
			jQuery('.background-image, .toggle-post').click(togglePost);
		}
	}
	if (document.querySelector('.about-container')) {
		var offset = (-jQuery('.background-image').height() + 100);
		document.querySelector('.about-container').style.marginTop = offset + 'px';
	}
});
