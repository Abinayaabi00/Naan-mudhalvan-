	<?php
		include("dbconnect.php");
		extract($_POST);
		session_start();
	
	if(isset($_POST['btn']))
	{
	$qry=mysql_query("select * from register where uname='$uname' && password='$password'");
	$num=mysql_num_rows($qry);
	if($num==1)
	{
	$qry1=mysql_query("select * from register where uname='$uname' && password='$password'");
	$rw=mysql_fetch_assoc($qry1);
	$_SESSION['uid']=$rw['id'];
	
	echo "<script>alert('User Home Page')</script>";
	
	header("location:uhome.php");
	}
	else
	{
	echo "<script>alert('User Name Password Wrong.....')</script>";
	
	}
	}
	?> 
<html>
<title>Bus Guidence</title>
<style>

p
{
	color:#99ccff;
	text-align: center;
	text-transform: uppercase;
	 font-size:15px;
}

ul {
	padding:30px;
	
  list-style-type: none;
  overflow: hidden;
  background:#003300;
   background-repeat: no-repeat;
   background-size: 1420px  200px;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:10px;
}

li {
  float: left;
}

li a {
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #ccffff;
}

.active {
  background-color: #4CAF50;
}

#footer {
  border: 2px solid #003300;
  padding: 30px;
  background: #003300;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:150px;
  background:url("images/1.jpg");
  background-repeat: no-repeat;
  background-size: 1420px  300px;
  border-radius:5px;
   border-radius:10px;
    text-align:right;
   font-size:35px;
   color:#ffffff;
}
</style>
</head>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a class="active" href="index.php"><strong>Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="admin.php"><strong>Admin login</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="user.php"><strong>User Login</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="about.php"><strong>About Us</a></li>
</ul>

<br />
<br />
<div id="bg1">Bus Guidence System</div>



<form id="form1" name="form1" method="post" action="">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">User Login</font> </div></td>
		 </tr>
			<tr>
		<td width="48%">&nbsp;</td>
		    <td width="52%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>User Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
		 
		  <tr>
          
           <td><a href="register.php">New User</a> </td>
         </tr>
		 
		 
		 
  </table>
</form>
<div> &nbsp;</div>
<br>
<br>
<div id="footer"> <p>copyrights & designedby@Bus Guidence</p></div>