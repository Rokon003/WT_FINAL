var hasError=false;
function get(id){
	return document.getElementById(id);
}
function validate(){
	refresh()
	if(get("name").value == ""){
	    hasError =true;
	    get("err_name").innerHTML="*Name required";
	}
	else if(get("name").value.length <3){
		hasError =true;
		get("err_name").innerHTML="*Name must be greater than 3 characters";
	}
	if(get("uname").value == ""){
		hasError =true;
		get("err_uname").innerHTML="*Username required";
	}
	if(get("pass").value == ""){
	    hasError =true;
	    get("err_pass").innerHTML="*Valid password required";
	}
	if(get("cpass").value == ""){
	    hasError =true;
	    get("err_cpass").innerHTML="*didn't match";
	}
    if(get("email").value == ""){
	    hasError =true;
	    get("err_email").innerHTML="*Valid email required";
	}
	if(get("phone").value == ""){
		hasError =true;
		get("err_phone").innerHTML="*Valid phone required";
	}
	
	return !hasError=true;
}
function refresh(){

	hasError=false;
	get("err_name").innerHTML="";
	get("err_uname").innerHTML="";
	get("err_pass").innerHTML="";
	get("err_cpass").innerHTML="";
	get("err_email").innerHTML="";
	get("err_phone").innerHTML="";
}