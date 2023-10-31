<?php
include("dbconnect.php");
session_start();
extract($_POST);
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
  <li><a class="active" href="uhome.php"><strong>UserHome</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="search.php"><strong>Search Bus</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Bus Guidence System</div>

 <h1 align="center">Welcome To Bus Search </h1> 



     
		
		<form id="form1" method="post" action="">
      <div align="center">From Bus Stop &nbsp;<input name="loc" type="text" id="loc" /> &nbsp; To Bus Stop &nbsp;<input name="locc" type="text" id="locc" />&nbsp;  <input name="btn" type="submit" id="btn" value="Find" />
                </div></form>
            <table width="70%" border="0" align="center" bordercolor="#000000">
              <tr>
                <td width="5%" height="31"><div align="center"><strong>Sl.No</strong></div></td>
                <td width="10%"><div align="center"><strong>Bus No </strong></div></td>
                <td width="14%"><div align="center"><strong>Bus Name </strong></div></td>
				 <td width="14%"><div align="center"><strong>Bus Route </strong></div></td>
                <td width="19%"><div align="center"><strong>Bus Time</strong></div></td>
                <td width="19%"><div align="center"><strong>Action</strong></div></td>
              </tr>
              <?php
			  if(isset($_POST['btn']))
			  {
			  $qst=mysql_query("SELECT * FROM bus WHERE stp like '%".$loc."%' && epoint like '%".$locc."%'");
			  $i=1;
			  while($row=mysql_fetch_array($qst))
			  {
			  ?>
              <tr>
                <td height="26"><div align="center"><?php echo $i;?></div></td>
                <td><div align="center"><?php echo $row['bno'];?></div></td>
                <td><div align="center"><?php echo $row['name'];?></div></td>
                <td><div align="center"><?php echo $row['spoint'];?>--<?php echo $row['epoint'];?></div></td>
				 <td><div align="center"><?php echo $row['time'];?></div></td>
				 <td><div align="center"><a target="_blank" href="http://maps.google.com/maps/dir/<?php echo $loc;?>/<?php echo $locc;?>">Show</a></div></td>
				  <!--<td><div align="center"><a target="_blank" href="http://maps.google.com/maps/dir/<?php echo $row['spoint'];?>/<?php echo $row['epoint'];?>">Show</a></div></td>-->
               <!-- <td><div align="center"><a href="map.php?id=<?php echo $row['id'];?>">Show</a></div></td>-->
              </tr>
              <?php
			  $i++;
			  }
			  }
			  ?>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              </table>
           
		   
		   
		   
		   
		   <div> &nbsp;</div>
<br>
<br>
<div id="footer"> <p>copyrights & designedby@Bus Guidence</p></div>