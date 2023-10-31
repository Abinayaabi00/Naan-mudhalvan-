<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from register");
$max_row = mysql_fetch_array($max_qry); 
$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into register values('$id','$name','$gender','$address','$pnumber','$email','$uname','$password')");
if($qry)
{
 echo "<script>alert('Data Save');</script>";
}
else
{
 echo "<script>alert('Data Not Save');</script>";
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



 <form id="form1" method="post" action="">
  
		  
		  <h1 align="center"><p>User Register</p></h1> 
 
    <table width="45%" border="0" align="center">
      <tr>
        <td>&nbsp;</td>
        <td><strong>Name</strong></td>
        <td><input name="name" type="text" id="name" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><strong>Gender</strong></td>
        <td>
          <input name="gender" type="radio" id="gender" value="male" />
          Male
          <input name="gender" type="radio" id="gender" value="female" />
          Female</span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><strong>Address</strong></td>
        <td><textarea name="address" id="address"></textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><strong>Phone Number</strong></td>
        <td><input name="pnumber" type="text" id="pnumber" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><strong>Email </strong></td>
        <td><input name="email" type="text" id="email" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><strong>User Name </strong></td>
        <td><input name="uname" type="text" id="uname" maxlength="8"/></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><strong>Password</strong></td>
        <td><input name="password" type="password" id="password"  maxlength="8"/></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
       
       <td colspan="3" align="center">
                  <input name="btn" type="submit" id="btn" value="Register" />
            
        </td>
        <td>&nbsp;</td>
      </tr>
      
      
   </table>
</form>


<div id="footer"> <p>copyrights & designedby@Bus Guidence</p></div>