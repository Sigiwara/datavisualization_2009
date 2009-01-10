$(document).ready(function(){
	/* Elements Visibility
	/////////////////////////////////////////////////////////////////*/
	$(".folded").hide();
	$('#dashboard > li').mouseover(function(){
		$(this).addClass('hover');
	});
	$('#dashboard > li').mouseout(function(){
		$(this).removeClass('hover');
	});
	/* Elements Functionality
	/////////////////////////////////////////////////////////////////*/
	$('#browse_tabs > ul').tabs();
	$("#archives_toggle").click(function(){
		$(this).toggleClass('hover');
		$("#archives").slideToggle("fast");
		return false;
	});
	$("#tags_toggle").click(function(){
		$(this).toggleClass('hover');
		$("#tags").slideToggle("fast");
		return false;
	});
	$("#projects_toggle").click(function(){
		$(this).toggleClass('hover');
		$("#projects").slideToggle("fast");
		return false;
	});
});