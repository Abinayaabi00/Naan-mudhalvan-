<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
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
<h1 align="center">Welcome To Admin Bus Details </h1> 
 
          <table width="100%" border="0" align="center">
            <tr>
              <td width="7%"><div align="center"><strong>Sl.No</strong></div></td>
              <td width="15%"><div align="center"><strong>Bus Name </strong></div></td>
              <td width="13%"><div align="center"><strong>Bus Number </strong></div></td>
              <td width="14%"><div align="center"><strong>Strat Point </strong></div></td>
              <td width="16%"><div align="center"><strong>End Point </strong></div></td>
              <td width="14%"><div align="center"><strong>Stops</strong></div></td>
			    <td width="14%"><div align="center"><strong>Time </strong></div></td>
              <td width="14%"><div align="center"><strong>Action</strong></div></td>
            </tr>
			
			
			<tr>
			
			<td colspan="8">&nbsp; </td>
			
			
			
			<?php
			
			
			
			
			
			
			$qry=mysql_query("select * from bus");
			$i=1;
			while($row=mysql_fetch_array($qry))
			{
			?>
            <tr>
               <td><div align="center"><?php echo $i;?> </div></td>
              <td><div align="center"><?php echo $row['name'];?></div></td>
              <td><div align="center"><?php echo $row['bno'];?></div></td>
              <td><div align="center"><?php echo $row['spoint'];?></div></td>
              <td><div align="center"><?php echo $row['epoint'];?></div></td>
              <td><div align="center"><?php echo $row['stp'];?></div></td>
			  <td><div align="center"><?php echo $row['time'];?></div></td>
       <td><div align="center"><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>|<a href="adminhome.php?act=del&name=<?php echo $row['name'];?>">Delete</a></div></td>
            </tr>
			
			
			
			
			<tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td width="7%">&nbsp;</td>
            </tr>
			
			
			
			<?php
			$i++;
			}
		
			if($_REQUEST['act']=="del")
		{
		$id=$_REQUEST['name'];
		mysql_query("delete from bus where name='$id'");
		
		}
			?>
            
           
          </table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer"> <p>copyrights & designedby@Bus Guidence</p></div>
