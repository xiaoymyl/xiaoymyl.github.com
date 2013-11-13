<?php include 'header.php'; ?>
<style>
	#header_menu_box ul.header_menu_list li.menu_list_1 a {
	background-position: 0px 50px;
	width: 130px;
}
</style>
<div class="banner">
      <div class="banner_container" id="index_banner">


    

     <div class="banner_content">

      <div style="background-image:url(images/top_01.jpg); width:100%; height:497px;margin:0 auto;"> <a class="banner_link_one" href="" style="position:absolute;left:397px;top:199px;display:block;" > <img src="images/top_11.png" class="png"  /></a><a class="banner_link_two" href="" style="position:absolute;left:397px;top:289px;display:block;" ><img src="images/top_12.png" /></a><a class="banner_link_three" href="" style="position:absolute;left:397px;top:299px;display:block;" ><img src="images/top_13.png" /></a></div>

    </div>

    

       <div class="banner_content">

      <div style="background-image:url(images/top_02.jpg); width:100%; height:497px;margin:0 auto;"> <a class="banner_link_one" href="" style=" position:absolute;left:427px;top:152px;display:block;"> <img src="images/top_21.png" class="png" /></a>  <a class="banner_link_two" href="" style=" position:absolute;left:427px;top:212px;display:block;"> <img src="images/top_22.png" class="png" /></a> <a class="banner_link_three" href="" style=" position:absolute;left:427px;top:232px;display:block;"> <img src="images/top_23.png" class="png" /></a></div>

    </div>

    

    <div class="banner_content">

      <div style="background-image:url(images/top_03.jpg); width:100%; height:497px;margin:0 auto;"> <a class="banner_link_one" href="" style="position:absolute;left:102px;top:175px;display:block;"> <img src="images/top_31.png"  class="png" /></a>  <a class="banner_link_two" href="" style="position:absolute;left:102px;top:265px;display:block;"> <img src="images/top_32.png"  class="png" /></a>  <a class="banner_link_three" href="" style="position:absolute;left:102px;top:275px;display:block;"> <img src="images/top_33.png"  class="png" /></a> </div>

    </div>

    


        <div class="banner_content">

      <div style="background-image:url(images/top_04.jpg); width:100%; height:497px;margin:0 auto;"> <a class="banner_link_one" href="" style="position:absolute;left:350px;top:125px;display:block;"> <img src="images/top_41.png"  class="png" /></a> <a class="banner_link_two" href="" style="position:absolute;left:350px;top:230px;display:block;"> <img src="images/top_42.png"  class="png" /></a> <a class="banner_link_three" href="" style="position:absolute;left:350px;top:245px;display:block;"> <img src="images/top_43.png"  class="png" /></a> </div>

    </div>
    
    
     <div class="banner_content">

      <div style="background-image:url(images/top_05.jpg); width:100%; height:497px;margin:0 auto;"> <a class="banner_link_one" href="" style="position:absolute;left:497px;top:137px;display:block;"> <img src="images/top_51.png"  class="png" /></a> <a class="banner_link_two" href="" style="position:absolute;left:497px;top:217px;display:block;"> <img src="images/top_52.png"  class="png" /></a> <a class="banner_link_three" href="" style="position:absolute;left:497px;top:247px;display:block;"> <img src="images/top_53.png"  class="png" /></a> </div>

    </div>

    
    <ul class="banner_nav">

      <li class="current"><a></a></li>

      <li><a></a></li>

      <li><a></a></li>      <li><a></a></li>
	  <li><a></a></li>
    </ul>

  </div>
    </div>
    <script language="javascript">



	$().ready(function(e) {


		$f.create($f.slide,{parent:'.banner_container',target:'.banner_content',nav:'.banner_nav li',start:2,easing:'easeInOutExpo',duration:1000,time:10000,auto:true,dir:0,current:'current'});

		var pos = {

			0:120,1:870,2:120,3:880,4:870

		},offset = 600,time_one=1400,time_two=1200,time_three=1000;

		$('.banner_content').each(function(index, element) {

			$(this).bind('slideInPos',function(){
				
				$(this).find('.banner_link_one').stop().css({left:pos[index]-offset}).animate({left:pos[index]},time_one,'swing');
				$(this).find('.banner_link_two').stop().css({left:pos[index]-offset}).animate({left:pos[index]},time_two,'swing');
				$(this).find('.banner_link_three').stop().css({left:pos[index]-offset}).animate({left:pos[index]},time_three,'swing');
				

			}).bind('slideInNeg',function(){

				$(this).find('.banner_link_one').stop().css({left:pos[index]+offset}).animate({left:pos[index]},time_one,'swing');
				$(this).find('.banner_link_two').stop().css({left:pos[index]+offset}).animate({left:pos[index]},time_two,'swing');
				$(this).find('.banner_link_three').stop().css({left:pos[index]+offset}).animate({left:pos[index]},time_three,'swing');

			}).bind('slideOutPos',function(){

				$(this).find('.banner_link_one').stop().css({left:pos[index]}).animate({left:pos[index]+offset},time_one,'swing');
				$(this).find('.banner_link_two').stop().css({left:pos[index]}).animate({left:pos[index]+offset},time_two,'swing');
				$(this).find('.banner_link_three').stop().css({left:pos[index]}).animate({left:pos[index]+offset},time_three,'swing');

			}).bind('slideOutNeg',function(){

				$(this).find('.banner_link_one').stop().css({left:pos[index]}).animate({left:pos[index]-offset},time_one,'swing');
				$(this).find('.banner_link_two').stop().css({left:pos[index]}).animate({left:pos[index]-offset},time_two,'swing');
				$(this).find('.banner_link_three').stop().css({left:pos[index]}).animate({left:pos[index]-offset},time_three,'swing');

			});

		});

		
		

	});


</script> 
  </div>
  

<div class="content_tab">
  <div id="work_share">
    <div id="work_share_menu">
      <ul>
        <li id="menu_title"><a></a></li>
        <li id="menu_food"><a href="anli_aoliao.php"><span class="menu_hover" id="hover_food"></span></a></li>
        <li id="menu_medicine"><a href="anli_999.php"><span class="menu_hover" id="hover_medicine"></span></a></li>
        <li id="menu_it"><a href="anli_intel.php"><span class="menu_hover" id="hover_it"></span></a></li>
        <li id="menu_daily"><a href="anli_baojie.php"><span class="menu_hover" id="hover_daily"></span></a></li>
        <li id="menu_traffic"><a href="anli_shdz.php"><span class="menu_hover" id="hover_traffic"></span></a></li>
      </ul>
    </div>
  </div>
    <div id="menu_tab">
    	<div id="tab_bg"><img class="png" src="images/foot_4.png" width="922" height="105" /></div>
        <ul>
            <li>
                <p class="pt"><a><i>大平台</i></a></p>
                <img class="iteam png" id="pt_iteam1" style="margin-top:-6px;" src="images/foot_1.png" width="868" height="518" />
                <!--<a class="iteam_1 iteam" href="#"></a>-->
            </li>
            <li>
                <p class="data"><a><i>大数据</i></a></p>
                <img class="iteam png" id="pt_iteam2" style="margin-top:-6px;" src="images/foot_2.png" width="868" height="518" />
                <!--<a class="iteam_2 iteam" href=""></a>-->
            </li>
            <li>
                <p class="zy"><a><i>大资源</i></a></p>
                <img class="iteam png" id="pt_iteam3" style="margin-top:-6px;margin-left:-2px" src="images/foot_3.png" width="868" height="518" />
                <!--<a class="iteam_3 iteam" href=""></a>-->
            </li>
        </ul>
        
    </div>

</div>
<script>
	$(document).ready(function(){
		
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
</script>
<?php include 'footer.php'; ?>
