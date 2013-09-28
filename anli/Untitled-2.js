

$(document).ready(function(e) {
	var addContent = function(f,t){
		var jsonUrl = "al.json"	
		$.get(jsonUrl, function(json){		
			if(!!json.rows){
				var Data = json.rows;
				for(i=f;i<t;i++){
				 if(!Data[i]){
				   break;
			     }
				 var ulContent = '<li><div class="info_img"><img src="'+Data[i].img+'" /></div><div class="info_content"><div class="content_top"><h2>'+Data[i].title+
				 '</h2><p>'+Data[i].content+'</p></div><div class="content_bot"><p>'+Data[i].owner+'</p><p>'+Data[i].url+'</p><p>'+Data[i].id+'</p></div></div></li>'
				 
				 
				 	
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

