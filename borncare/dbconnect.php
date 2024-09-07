
<?php 



$host = "localhost";
$dbname = "borncare";
$username = "root";
$password = "";

try{
	
	$con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", "$username", "$password");
	
}catch(PDOException $error){
	echo "Hata oluştu.". $error -> getMessage();
}


?>
