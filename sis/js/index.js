
$(document).ready(function(e) {
		/*$(".menu_son").hide();*/
		$(".nav_menu li").hover(function(){
			$(this).children("ul").stop(true,true).slideDown(300);
			},function(){
			$(this).children("ul").stop(true,true).slideUp(300);
			});
			
		
		$(".iteam").hide();
		$(".iteam:first").show();
		$("#menu_tab p").click(function () {
			if ($(this).next().is(":hidden")) {
				$(".iteam").stop(true,true).animate({width:"hide"},800,"easeOutCirc");
				$(this).next().animate({width:"show"},800,"easeOutCirc");
			}
		});
		$("#pt_iteam1").click(function(){
			window.location.href="";
			})
		$("#pt_iteam2").click(function(){
			window.location.href="";
			})
		$("#pt_iteam3").click(function(){
			window.location.href="";
			})
		$(".pt").click(function(){
			setCol(this,"#2571ab");
			})
		
		$(".data").click(function(){
			setCol(this,"#588d33");
			})
		$(".zy").click(function(){
			setCol(this,"#d77a13");
			})
		
		$(".menu_hover").css("opacity","0")
		$("#menu_food a").hover(function(){
			mouseIn(this)
			},function(){
			mouseOut(this)
			})
		$("#menu_medicine a").hover(function(){
			mouseIn(this)
			},function(){
			mouseOut(this)		
			})
		$("#menu_it a").hover(function(){
			mouseIn(this)
			},function(){
			mouseOut(this)
			})
		$("#menu_daily a").hover(function(){
			mouseIn(this)
			},function(){
			mouseOut(this)		
			})
		$("#menu_traffic a").hover(function(){
			mouseIn(this)
			},function(){
			mouseOut(this)		
			})	
			
			
			/*MoveTo("#jg_one",{left:"397px"},1400);
			MoveTo("#jg_two",{left:"330px"},1300);
			MoveTo("#jg_three",{left:"148px"},1200);
			var length =$(".banner_box").length;
			var liWidth =$(".banner_box").width();
			$(".banner_content").css("left","0px");
			$(".banner_content").width(length* liWidth);
			$(".banner_content").css("overflow","hidden");
			
			var direction = 0;
			function MoveToLeft(){
				var obj = $(".banner_box");
				var offsetLeft = obj.position().left;
				if(offsetLeft == 0){
					direction = 0;	
				}
				if(offsetLeft == -(length -1)* liWidth){
					direction = 1;	
				}
				if(direction == 0){
					var newPosition = offsetLeft - liWidth;
					obj.animate({left:newPosition +"px"},600);	
				}else{
					var newPosition = offsetLeft + liWidth;
					obj.animate({left:0+"px"},600);	
				}
				
				
				if(offsetLeft > -(length -4)* liWidth){
					MoveTo("#mz_one",{right:'127px'},1400);
					MoveTo("#mz_two",{right:"127px"},1300);
					MoveTo("#mz_three",{right:"127px"},1200);
					
					MoveTo("#jg_one",{left:"797px"},1400);
					MoveTo("#jg_two",{left:"730px"},1300);
					MoveTo("#jg_three",{left:"548px"},1200);
					
				}else if(offsetLeft > -(length -3)* liWidth){
					MoveTo("#mz_one",{right:"527px"},1400);
					MoveTo("#mz_two",{right:"527px"},1300);
					MoveTo("#mz_three",{right:"527px"},1200);
					
					MoveTo("#dz_one",{left:"208px"},1400);
					MoveTo("#dz_two",{left:"142px"},1300);
					MoveTo("#dz_three",{left:"138px"},1200);
					
					
				}else if(offsetLeft > -(length -2)* liWidth){
					MoveTo("#dz_one",{left:"708px"},1400);
					MoveTo("#dz_two",{left:"542px"},1300);
					MoveTo("#dz_three",{left:"538px"},1200);
					
					MoveTo("#qj_one",{right:"148px"},1400);
					MoveTo("#qj_two",{right:"150px"},1300);
					MoveTo("#qj_three",{right:"138px"},1200);
					
					
				}else if(offsetLeft > -(length -1)* liWidth){
					MoveTo("#yl_one",{right:"139px"},1400);
					MoveTo("#yl_two",{right:"139px"},1200);
					MoveTo("#yl_three",{right:"139px"},1000);
					MoveTo("#qj_one",{right:"748px"},1400);
					MoveTo("#qj_two",{right:"750px"},1300);
					MoveTo("#qj_three",{right:"738px"},1200);
					
					
				}else{
					MoveTo("#yl_one",{right:"539px"},1400);
					MoveTo("#yl_two",{right:"539px"},1300);
					MoveTo("#yl_three",{right:"539px"},1200);
					
					MoveTo("#jg_one",{left:"397px"},1400);
					MoveTo("#jg_two",{left:"330px"},1300);
					MoveTo("#jg_three",{left:"148px"},1200);
					
				}
			}
			setInterval(MoveToLeft,4000);*/
			
						
				 

})
function setCol(id,col){
	$(id).css("background-color",col);
	$(id).parent().siblings().children("p").css("background","#b4b4b4");
	}
function mouseIn(id){
	$(id).children().stop(true,true).animate({opacity:"1"},400,"easeInOutBounce")
	}
function mouseOut(id){
	$(id).children().stop(true,true).animate({opacity:"0"},400,"easeInOutBounce")
	}
function MoveTo(id,param,time){
	$(id).animate(param,time,"easeInOutExpo");
	}
	