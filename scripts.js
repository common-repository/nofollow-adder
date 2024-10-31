jQuery(function($){
	$(document).ready(function(){
		var urlwords=rooturl.split("://");
		var matchstring = new RegExp(urlwords[1], 'g');
		$("body").find("a").each(function(){
			if($(this).attr("href").match(matchstring)==null && $(this).attr("href").match(/http/)){
				if($(this).attr('rel')==undefined){
					$(this).attr('rel','nofollow');
				}else{
					if($(this).attr('target')=='_blank'){
						$(this).removeAttr('rel');
						$(this).attr('rel','noopener,nofollow');
					}else{
						$(this).removeAttr('rel');
						$(this).attr('rel','nofollow');
					}
				}
			}
		});
	});
});