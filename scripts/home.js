$(document).ready(function(){
		$(".card").flip();
		$(".want_in_button").click(function(){
			prompt("Leave a note to the organizer to apply!","");
		});

		$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
		
		$(".category").each(function(){
			var h = $(this).find(".card").find(".event").height()+300;
			$(this).css("height",h+"");
		});
		

});