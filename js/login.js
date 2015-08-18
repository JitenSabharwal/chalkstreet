function _login()
{
	var user=document.forms['loginform'].elements['user'].value;
	var pass=document.forms['loginform'].elements['pass'].value;
	var str="&user="+user+"&pass="+pass+"&Submit=s";
	xml=createAjaxObj();
	xml.open("POST","login_verify.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(str);
	//alert(xml.responseText);
	switch(xml.responseText.trim())
	{
		case "1" : 	ruser=user;
						window.open("../index.php","_self");
							break;
		case "0"  :	alert("Enter corect Username and Password");
							break;
	}
	return false;
}