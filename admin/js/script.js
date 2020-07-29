// Check filling login  

function login_check_eng() {
if(document.login.username.value=="") {
alert("Please fill your username") ;
document.login.username.focus() ;
return false ;
}

else if(document.login.password.value=="") {
alert("Please fill your password") ;
document.login.password.focus() ;
return false ;
}
else
return true ;
}

function login_check_th() {
if(document.login.username.value=="") {
alert("กรุณากรอกชื่อผู้ใช้ด้วยค่ะ") ;
document.login.username.focus() ;
return false ;
}

else if(document.login.password.value=="") {
alert("กรุณากรอกรหัสผ่านด้วยค่ะ") ;
document.login.password.focus() ;
return false ;
}
else
return true ;
}

function manager_check_field() {
if(document.manager.username.value=="") {
alert("กรุณากรอกชื่อผู้ใช้ด้วยค่ะ") ;
document.manager.username.focus() ;
return false ;
}

else if(document.manager.password.value=="") {
alert("กรุณากรอกรหัสผ่านด้วยค่ะ") ;
document.manager.password.focus() ;
return false ;
}
else if(document.manager.fname.value=="") {
alert("กรุณากรอกชื่อด้วยค่ะ") ;
document.manager.fname.focus() ;
return false ;
}
else
return true ;
}

//----------------------------------------------

// Check Select Lecturer and Course name

function cos_lec_check() {
if(document.cos_lec.lec_id.value=="") {
alert("Please select lecturer name") ;
document.cos_lec.lec_id.focus() ;
return false ;
}

else if(document.cos_lec.course_id.value=="") {
alert("Please select course name") ;
document.cos_lec.course_id.focus() ;
return false ;
}

else
return true ;
}

//---------------------------------------------

/*
function login_check() {
if(document.login.username.value=="") {
alert("Please fill your username") ;
document.login.username.focus() ;
return false ;
}

else if(document.login.password.value=="") {
alert("คุณยังไม่ได้กรอกรหัสนักศึกษาค่ะ") ;
document.login.password.focus() ;
return false ;
}

else
return true ;
} 
*/