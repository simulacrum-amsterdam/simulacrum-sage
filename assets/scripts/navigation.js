jQuery('.menu-button').click(function(){
	console.log('clicked');
	jQuery('.main-wrapper, .nav-side, .header-left, .header-right').toggleClass('on');
});
console.log('hi');