$(document).ready(function(){
  $("#submit-btn").on("click", function(){
let first_name = $("#first_name").val();
let last_name = $("#last_name").val();
let password = $("#password").val();
let cpassword = $("#cpassword").val();
let email = $("#email").val();
let submit = $("#submit-btn").val();
if (first_name.trim()=="") {
  $("#first_name").css({border:"1px solid red"});
  $("#first_name_error").html("Please Enter Your Name").css({color:"red"});
}else{
    $("#first_name").css({border:"1px solid green"});
    $("#first_name_error").html("");
}
if (last_name.trim()=="") {
  $("#last_name").css({border:"1px solid red"});
  $("#last_name_error").html("Please Enter Your Last Name").css({color:"red"});
}else{
    $("#last_name").css({border:"1px solid green"});
      $("#last_name_error").html("");
}

if (email.trim()=="") {
  $("#email").css({border:"1px solid red"});
  $("#email_error").html("Please Enter e-mail Address").css({color:"red"});
}else{
    $("#email").css({border:"1px solid green"});
      $("#email_error").html("");
}

if (password.trim()=="") {
  $("#password").css({border:"1px solid red"});
  $("#password_error").html("Please Enter Your Password").css({color:"red"});
}else{
    $("#password").css({border:"1px solid green"});
      $("#password_error").html("");
}

if (password.trim()=="") {
  $("#cpassword").css({border:"1px solid red"});
  $("#cpassword_error").html("Please Enter Confirm Password").css({color:"red"});
}else{
    $("#cpassword").css({border:"1px solid green"});
      $("#cpassword_error").html("");
}

//check for passwords
if (password!==cpassword) {
  $("#password").css({border:"1px solid red"});
    $("#cpassword").css({border:"1px solid red"});
      $("#cpassword_error").html("Password do not Match").css({color:"red"});
}
if (first_name!="" && last_name!="" && email!="" && password!="" && cpassword!="") {
$.ajax({
  url:"insert.php",
  method:"POST",
  data:{
    first_name:first_name,
    last_name:last_name,
    email:email,
    password:password,
    submit_btn:submit
  },
  success:function(data){
$("#response").html(data);
  }
});
}
  })
})
