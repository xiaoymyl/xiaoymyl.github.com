$(document).ready(function(e) {
	
	$("#menu_tab li").mouseover(function(){
		$("#menu_tab li").removeClass("hover");
		$("#tab_img img").hide();
		$("#tab_img img").eq($(this).index()).show();
		$(this).addClass("hover");
		});
	$("#menu_tab li").eq(0).mouseover();	    
});
$(document).ready(function(e) {
    		$('.homepage_intro_player_control a').bind('click',function(){
			if(!$(this).hasClass('current')){
				var $a = $('.homepage_intro_player_control a');
				var f = $a.index($a.filter('.current'));
				var t = $a.index(this);
				$a.removeClass('current');
				$(this).addClass('current');
				$('img',$a).attr("src","img/arrow_gray.jpg") ; 
				$(this).children("img").attr("src","img/arrow_black.jpg");
				var $text = $('.homepage_intro_title');
				var $img = $(".homepage_intro_player a");
				var $info = $(".homepage_intro_player .pic_info");
				$text.hide();
				$text.eq(t).show();
				$img.eq(f).stop(true,true).fadeOut(500);
				
				$img.eq(t).stop(true,true).fadeIn(500);
				
				
				if(!!_h_timer)clearTimeout(_h_timer);
				_h_timer = setTimeout(function(){_h_timerfunc();},5000);
			}
		}).eq(0).addClass('current');
		$(".homepage_intro_player").bind('mouseenter',function(){
			if(!!_h_timer)clearTimeout(_h_timer);
		}).bind('mouseleave',function(){
			if(!!_h_timer)clearTimeout(_h_timer);
			_h_timer = setTimeout(function(){_h_timerfunc();},5000);
		});
		var _h_timer = null,_h_timerfunc = function(){
			var $a = $('.homepage_intro_player_control a');
			var f = $a.index($a.filter('.current'));
			var t = f+1>=$a.size()?0:f+1;
			$a.eq(t).trigger('click');
		}
		_h_timer = setTimeout(function(){_h_timerfunc();},8000);
		$(".iteam").hide();
		$(".iteam:first").show();
		$("#menu_tab p").click(function () {
			if ($(this).next().is(":hidden")) {
				$(".iteam").animate({width:"hide"},100);
				$(this).next().animate({width:"show"},100);                  
			}
		});
		$("#pt").click(function(){
			setCol(this,"#2571ab");
			})
		$("#data").click(function(){
			setCol(this,"#588d33");
			})
		$("#zy").click(function(){
			setCol(this,"#d77a13");
			})
});
function setCol(id,col){
	$(id).css("background-color",col);
	$(id).parent().siblings().children("p").css("background","#b4b4b4");
	}