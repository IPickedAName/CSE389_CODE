<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html>
<style>
body,li,ul{
 margin:0px auto;
}
body{
 background-color:#3498DB;
 width:100%;
 font-family:sans-serif;
}
header{
 background-color:#fff;
 width:100%;
 height:55px;
 margin:0px;
}
nav{
 width:100%;
 border-top:5px solid #3498DB;
}
nav ul{
 float:left;
 border-left:6px solid #BDC3C7;
 height:50px;
}
nav a{
 text-decoration:none;
 color:#3498DB;
 padding:10px;
 width:auto;
 font-size:30px;
 font-weight:bold;
 border-right:1px solid #BDC3C7;
 font-family:Gabriola;
 height:50px;
}
nav a:hover{
 color:#fff;
 background-color:#3498DB;
 transition:1s;
}
nav li{
 margin:0;
 padding:0;
 list-style:none;
 float:left;
}

#center{
 margin:0px auto;
 width:95%;
}
#center-set{
 float:left;
 width:100%;
 padding-top:1%;
 padding-bottom:0.5%;
 background-color:#A2DED0;
 border-top:5px solid #3498DB;
}
#signup{
 float:left;
 width:50%;
}
#signup-st,#login-st{
 background-color:#22313F;
 margin:50px;
 border-radius:20px;
 -webkit-box-shadow: 3px 3px 4px 0px rgba(0,0,0,0.85);
}
#reg{
 padding-top:10px;
}
#reg-head,#reg-bottom,#reg-head-fail{
 width:100%;
 text-align:center;
 background-color:#fff;
 font-weight:bold;
}
.headrg{
 border-top-left-radius:20px;
 border-top-right-radius:20px;
 padding-top:12px;
 padding-bottom:12px;
 font-size:22px;
 color:#6C7A89;
}
.btmrg{
 padding-top:5px;
 padding-bottom:5px;
 border-bottom-left-radius:20px;
 border-bottom-right-radius:20px;
 font-size:18px;
 color:#22313F;
}
#reg-head-fail{
 color:#D35400;
}
#reg-head:hover{
 color:#3498DB;
 transition:1s;
}
#tb-name{
 float:right;
 font-size:20px;
}
#tb-box{
 height:22px;
 width:200px;
}
#st{
 width:100%;
 text-align:center;
 padding-top:30px;
 padding-bottom:10px;
}
#st-btn{
 text-align:center;
 padding:10px 21px 10px 21px;
 background-color:#3498DB;
 border:none;
 color:#fff;
 cursor:pointer;
 font-size:20px;
 font-weight:bold;
}
#st-btn:hover{
 color:#3498DB;
 background:#fff;
 transition:1s;
}
td.t-1{
 float:left;
 width:44%;
 text-align:right;
 color:#C5EFF7;
}
td.t-2{
 float:right;
 width:55%;
}
#lg-1{
 padding:10px;
 float:left;
 width:95%;
}
.tl-1{
 float:left;
 width:40%;
 padding-right:5%;
 text-align:center;
 color:#C5EFF7;
}
.tl-4{
 font-size:17px;
 font-weight:bold;
 text-align:center;
 color:#FDE3A7;
}
#login{
 float:right;
 width:50%;
}
#login-sg{
 margin-top:20%;
}
#footer{
 background-color:#fff;
 width:100%;
 height:50px;
 margin:0px;
 float:left;
 border-top:5px solid #3498DB;
}
#footer p{
 text-align:center;
 font-size:18px;
 font-weight:bold;
 color:#3498DB;
}




</style>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title>7topics - Login Demo</title>
</head>
<body>
<header>
 <nav>
  <ul>
   <li><a href="https://7topics.com">7topics</a></li>
   <li><a href="https://7topics.com/creating-user-profile-page-using-php-and-mysql.html">Tutorial</a></li>
  </ul>
 </nav>
</header>
<div id="center">
<div id="center-set"> -written by Rahul Ranjan 
<div id="signup">
<div id="signup-st">
<div align="center">
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Register Here</div> ';
}
if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed!, Username exists</div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: '.$_GET['value'].' </div> ';
}
?>
</div>
<form name="reg" action="execute.php" onsubmit="return validateForm()" method="post" id="reg">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td class="t-1">
<div align="left" id="tb-name">First&nbsp;Name:</div>
</td>
<td width="171">
<input type="text" name="fname" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Last&nbsp;Name:</div></td>
<td><input type="text" name="lname" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Email:</div></td>
<td><input type="text" id="tb-box" name="address" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Password:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Submit" id="st-btn"/></div>
</form>
<div id="reg-bottom" class="btmrg">Copyright &copy; 2015 7topics.com</div>
</div>
</div>
<div id="login">
<div id="login-st">
<form action="" method="POST" id="signin" id="reg">
<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Login Here</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
}
?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Login" id="st-btn"/></div>
</form>
<div id="reg-bottom" class="btmrg">Copyright &copy; 2015 7topics.com</div>
</div>
</div>
</div>
</div>
<div id="footer"><p> Copyright &copy; 2014-2020 7topics.com </p></div>
</body>
</html>