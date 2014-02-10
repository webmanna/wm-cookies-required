jQuery(document).ready(function($){
	if(!cookies_are_enabled()) {
		var warning = $('<div>').addClass('cookie_warning');
		warning.html(
			"PBCJA.org's shopping cart and membership login require cookies." + 
			"<a href='/cookie-policy'>Click Here To Learn How To Enable Cookies.</a>"
		);
		warning.prependTo('body');
	}
	function cookies_are_enabled() {
		var cookieEnabled = (navigator.cookieEnabled) ? true : false;
		if (typeof navigator.cookieEnabled == "undefined" && !cookieEnabled) { 
			document.cookie="testcookie";
			cookieEnabled = (document.cookie.indexOf("testcookie") != -1) ? true : false;
		}
		return (cookieEnabled);
	}
});