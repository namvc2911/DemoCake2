 window.fbAsyncInit = function() {
    FB.init({
      appId      : '1233520856748148',
      cookie     : true,
      xfbml      : true,
      version    : '2.8'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


  jQuery(function($){
  	$('.facebookConector').click(function(){
  		FB.login(function(response){
  			console.log(response);
  		});
  		return false;
  	});
  });