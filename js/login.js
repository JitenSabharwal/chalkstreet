$(document).ready(function(){
	
	$("#login").click(function(){
		var user=$("#user").val();
		var pass=$('#pass').val();
		var sub=$('#login').val();
		login(user,pass);
	});
	
});
function login(user,pass)
{
	var str="&user="+user+"&pass="+pass;
	xml=createAjaxObj();
	alert(str);
	//xml.open("POST","login_verify.php",false);
	//xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	//xml.send(str);
	/*alert(xml.responseText);
	switch(xml.responseText.trim())
	{
		case "Yes" : 	ruser=user;
						window.open("../index.php","_self");
							break;
		case "No"  :	alert("Enter corect Username and Password");
							break;
	}
	*/
	return false;
}