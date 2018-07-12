jQuery(function($) {
	//Preloader
	var preloader = $('.preloader');
	$(window).load(function(){
		preloader.remove();
	});
});

/* Notif*/
function notifyMe(msg_title, msg_body, redirect_onclick) 
{
	var granted = 0;
	if (!("Notification" in window)) 
	{
		alert("This browser does not support desktop notification");
	}
	else if (Notification.permission === "granted") 
	{
		granted = 1;
	}
	else if (Notification.permission !== 'denied') 
	{
		Notification.requestPermission(function (permission) 
		{
			if (permission === "granted") {
				granted = 1;
			}
		});
	}
	if (granted == 1) 
	{
		var notification = new Notification(msg_title, 
		{
			body: msg_body,
			icon: 'assets/img/capture.jpg'
		});

		if (redirect_onclick) 
		{
			notification.onclick = function() 
			{
				window.location.href = redirect_onclick;
			}
		}
	}
}