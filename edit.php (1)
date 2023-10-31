<?php
include("dbconnect.php");
session_start();
extract($_POST);
echo $bid=$_REQUEST['id'];
if(isset($_POST['btn']))
{

$qry=mysql_query("update bus set name='$name',bno='$bno',spoint='$spoint',epoint='$epoint',stp='$stop',time='$time' where id='$bid'");
if($qry)
{
echo "<script>alert('Data updated');</script>";
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
  <li><a class="active" href="adminhome.php"><strong>Admin Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="bus.php"><strong>Add Bus</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewu.php"><strong>User Details</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Bus Guidence System</div>



	<form id="form1" method="post" action="">
  		
		<h1 align="center">Update Bus Details </h1> 
 
          <table width="100%" border="0" align="center">
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="19%" height="34">&nbsp;</td>
              <td width="19%">&nbsp;</td>
              <td width="11%"><strong>Bus Name </strong></td>
              <td width="23%"><label>
                <input name="name" type="text" id="name" />
              </label></td>
              <td width="28%">&nbsp;</td>
            </tr>
            <tr>
              <td height="33">&nbsp;</td>
              <td>&nbsp;</td>
              <td><strong>Bus No </strong></td>
              <td><input name="bno" type="text" id="bno" /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="34">&nbsp;</td>
              <td>&nbsp;</td>
              <td><strong>Strat Point </strong></td>
              <td><input name="spoint" type="text" id="spoint" /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="36">&nbsp;</td>
              <td>&nbsp;</td>
              <td><strong>End Point </strong></td>
              <td><input name="epoint" type="text" id="epoint" /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="54">&nbsp;</td>
              <td>&nbsp;</td>
              <td><strong>Stops</strong></td>
              <td><textarea name="stop" id="stop"></textarea></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="38">&nbsp;</td>
              <td>&nbsp;</td>
              <td><strong>Time</strong></td>
              <td><input name="time" type="text" id="time" /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><label>
                <div align="center">
                  <input name="btn" type="submit" id="btn" value="Submit" />
                  </div>
              </label></td>
              <td>&nbsp;</td>
            </tr>
          </table>
  </form>
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer"> <p>copyrights & designedby@Bus Guidence</p></div>