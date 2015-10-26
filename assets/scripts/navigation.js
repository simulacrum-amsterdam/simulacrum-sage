// jQuery('.menu-button').click(function() {

//   var selectClasses = [
//     '.main-wrapper',
//     '.nav-side'
//   ].join(', ');

//   jQuery(selectClasses).toggleClass('on');
// });

function togglePost(event){
	if (!document.querySelector('.toggle-post')) { return;}
	if (event) {event.stopPropagation();}
	var postMargin = document.querySelector('.single_post').style.marginTop;
	var bgImgHeight = jQuery('.background-image-wrapper').height();
	console.log(postMargin);
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

jQuery('.toggle-post').click(togglePost);

jQuery('body').click(function(event) {
	var bgImgHeight = jQuery('.background-image-wrapper').height();
	document.querySelector('.single_post').style.marginTop = (-bgImgHeight + 50) + 'px';
	jQuery('.toggle-post > .glyphicon').detach();
	jQuery('.toggle-post').append('<span class="glyphicon glyphicon-menu-down"></span>');
});

jQuery(document).ready(function(){
	window.setTimeout(togglePost, 500);
});
