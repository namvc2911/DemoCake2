$(document).ready(function(){
	$( "#link" ).keyup(function(){
		var key = $( "#link" ).val();
		$.ajax({
			type: "POST",
		  	url: '/cake/admin/news/findajax',
		  	data : {
                 keyword :key,
            },
		  	dataType: 'text',
		  	success : function (result){
                $('.content').append(result);
            }
		});
	});
});