$(document).ready(function(){
	$(window).load(function(){
		$(".responseholder").load("courses/toc.php");
	});
	
});
function courses()
{
	var name=document.forms['course'].elements['c_name'].value;
	var c_category=document.forms['course'].elements['c_category'].value;
	var c_level=document.forms['course'].elements['c_level'].value;
	var price=document.forms['course'].elements['price'].value;
	var str="name="+name+"&category="+c_category+"&level="+c_category+"&price="+price+"&Submit=submit";
	
	//console.log(name+c_category+c_level+price);
	
	xml=createAjaxObj();
	xml.open("POST","./courses/add_course.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(str);
	window.load("_self");	
	return false;
}
function _viewopen(d)
{
	window.open("section.php?course="+d);
}
function logout()
{
	xml=createAjaxObj();
	xml.open("POST","./log/logout.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send();
	window.open("log/login.php","_self");	
}
