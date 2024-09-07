<?php

session_start();

include("dbconnect.php");


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<h1>Hello <?php echo $_SESSION["username"]; ?></h1>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Your Info</h2>

<table style="display: inline-block; float: left">
  <tr>
    <th>First Name</th>
  </tr>
  <tr>
    <td> <?php echo $_SESSION["fname"] ;  ?> </td>
	</tr>
     <tr>
    <th>Last Name</th>
  </tr>
    <td> <?php echo $_SESSION["lname"] ;  ?> </td>
  </tr>
  <tr>
  	<th>Username</th>
  </tr>
  <tr>
  	<td> <?php echo $_SESSION["username"] ;  ?> </td>
  </tr>
  <tr>
  	<th>Email</th>
  </tr>
  <tr>
    <td> <?php echo $_SESSION["email"] ;  ?> </td>
  </tr>
  
</table>


<h2>Baby's Info</h2>

<table style="display: inline-block; float: right">
  <tr>
    <th>Baby's Name</th>
  </tr>
  <tr>
    <td> <?php echo $_SESSION["bname"] ;  ?> </td>
	</tr>
     <tr>
    <th>Baby's Gender</th>
  </tr>
    <td> <?php echo $_SESSION["gender"] ;  ?> </td>
  </tr>
  <tr>
  	<th>Baby's Birthday</th>
  </tr>
  <tr>
  	<td> <?php echo $_SESSION["bday"].".".$_SESSION["bmonth"].".".$_SESSION["byear"] ;  ?> </td>
  </tr>
  
  
</table>


</body>
</html>

