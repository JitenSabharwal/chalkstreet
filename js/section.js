$(document).ready(function(){
	$("#course").autocomplete({
	             source:'./search/getautocomplete_course.php',
                 minLength:1
     });
	$("#section").autocomplete({
	             source:'./search/getautocomplete_section.php',
                 minLength:1
     });
	$('.view').click(function(){
		var d=$(this).data('value');
		$(".responseholder").load(d);	
	});
});

function _section()
{
	var name=document.forms['section'].elements['s_name'].value;
	var detail=document.forms['section'].elements['s_detail'].value;
	var course=document.forms['section'].elements['s_course'].value;
	var str="name="+name+"&detail="+detail+"&course="+course+"&Submit=submit";
	
	xml=createAjaxObj();
	xml.open("POST","./courses/add_section.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(str);
	window.load("_self");
	return false;
}
function _video()
{
	var section=document.forms['video'].elements['v_section'].value;
	var detail=document.forms['video'].elements['v_detail'].value;
	var name=document.forms['video'].elements['v_name'].value;
	var str="name="+name+"&detail="+detail+"&section="+section+"&Submit=submit";
	
	xml=createAjaxObj();
	xml.open("POST","./courses/add_videos.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(str);
	//alert(xml.responseText);
	window.open("./video/index.php");
	window.load("_self");	
	return false;
}
