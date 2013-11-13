<?php include 'header2.php'; ?>
<style>
#allbtn {
	background-position:-6px -8px;
	width: 124px;
}
</style>
<div id="content_out">
  <div id="content_title"></div>
  <div id="content_list">
    <div id="list" data-id="3">
      <ul>
      </ul>
    </div>
  </div>
</div>
<script src="js/jquery-1.7.1.min.js"></script>
<script language="javascript">

$(document).ready(function(e) {
        var addContent = function(f,t){
                var jsonUrl = "images/al.json"        
                $.get(jsonUrl, function(json){                
                        if(!!json.rows){
                                var Data = json.rows;
                                for(i=f;i<t;i++){
                                 if(!Data[i]){
                                   break;
                             }
                                 var ulContent = '<li><a href="'+Data[i].more_a+'"><div class="info_img"><img src="'+Data[i].img+'" /></div></a><div class="info_content"><div class="content_top"><h2>'+Data[i].title+
                                 '</h2><p>'+Data[i].content+'</p></div><div class="content_bot"><p>'+Data[i].owner+'</p><p>'+Data[i].date+'</p><p>'+Data[i].txt+'<a target="_blank" class="url_a" href="'+Data[i].url+'">'+Data[i].url+'</a></p><div class="more"><a class="more_a png" target="_blank" href="'+Data[i].more_a+'" ></a></div></div></div></li>'
                                 
                                 
                                         
                                 $("#list ul").append(ulContent);
                                }
                        }
                });                
        }
        
        $(window).bind("scroll",function(){
                if( $(document).scrollTop() + $(window).height() > $(document).height() - 20 ){                        
                var toId = parseInt($("#list").attr("data-id"));
                addContent(toId,toId+3);
                $("#list").attr("data-id",toId+3);
                
                }
        });
        addContent(0,3);                
});

</script>
<?php include 'footer.php'; ?>
