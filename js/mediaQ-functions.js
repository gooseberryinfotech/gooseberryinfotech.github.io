$(function() {
	$('#navigation a.nav-btn').click(function(){
		$(this).closest('#navigation').find('ul').stop(true,true).slideToggle()
		$(this).find('span').toggleClass('active')
		return false;
	})
});