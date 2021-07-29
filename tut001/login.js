$(document).ready(function(){
  $("#login-btn").on("click", function(){
let username = $("#username").val();
let password = $("#password").val();
let submit = $("#login-btn").val();
if (username.trim()=="") {
  $("#username").css({border:"1px solid red"});
  $("#username_error").html("Username is Required").css({color:"red"});
}else{
    $("#username").css({border:"1px solid green"});
      $("#username_error").html("");
}

if (password.trim()=="") {
  $("#password").css({border:"1px solid red"});
  $("#password_error").html("Password is Required").css({color:"red"});
}else{
    $("#password").css({border:"1px solid green"});
      $("#password_error").html("");
}
if (username!=="" && password!=="") {
$.ajax({
  url:"login_process.php",
  method:"POST",
  data:{
    username:username,
    password:password,
    login_btn:submit
  },
  success:function(data){
$("#response").html(data);
  }
});
}
  })
})
