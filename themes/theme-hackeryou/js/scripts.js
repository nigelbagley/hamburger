$(function(){
	$(".fa-bars").on("click", function(){
		("header .container").css("background", "red");
	});

	$(".hamburger img").on("click", function(){
		$(".overlay").addClass("show");
	});

	$(".close").on("click",function(e){
		e.preventDefault();
		$(".overlay").removeClass("show");
	});
});