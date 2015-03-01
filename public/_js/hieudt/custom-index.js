$(document).ready(function(){
	$("#find-store-button").on("click",function(){
		var pre = $("#pre").val();
		var post = $("#post").val();
		if(pre != null && $.trim(pre) != ""){
			if(post != null && $.trim(post) != ""){
				var dataString = "pre="+pre+"&post="+post;
				$.ajax({
					url: "findstore",
					type: "GET",
					cache: false,
					data: dataString,
					processData: false,
					contentType: false,
					error: function(){
						alert("Cannot communicate with server. Please try again later!");
						return false;
					}
				});
			}
		}
	});
});