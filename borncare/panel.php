<?php
// baĞlanıyoruz 


require_once("dbconnect.php"); 





$kullanici = $_COOKIE['$u_username'];





// cookie den gelen ad ile tablodan kullanıcının id sini alıcaz 


$sor = mysql_query("select * from user where username='$kullanici'");





$yaz = mysql_fetch_array($sor);





// id aldık tamamdır


$id = $yaz['id']; 





// id ye göre profil sayasına gönderdik


echo "<a href='profil.php?id=$id'>Üye Profilim</a>";

?>