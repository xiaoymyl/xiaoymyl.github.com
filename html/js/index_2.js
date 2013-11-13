// JavaScript Document
$(document).ready(function(e){
  if($(".son").css('left') == '100px'){
		  $(".son").animate({ left: "+=100" }, 1000);
		  $("#hide").val('显示');
	}else{
		$(".son").animate({ left: "+=100" }, 1000);
		$("#hide").val('隐藏');
	}
						   });