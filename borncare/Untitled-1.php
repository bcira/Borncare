<?php
if(empty($_GET['ay']) or empty($_GET['yil'])){
$ay = date('m');
$yil = date('Y');
}else{
$ay = $_GET['ay'];
$yil = $_GET['yil'];
}
 
$dizi_ay = Array(
1=>'Ocak',
2=>'Şubat',
3=>'Mart',
4=>'Nisan',
5=>'Mayıs',
6=>'Haziran',
7=>'Temmuz',
8=>'Ağustos',
9=>'Eylül',
10=>'Ekim',
11=>'Kasım',
12=>'Aralık'
);
?>
<html>
<head>
<meta yasak kelime"Content-Type" content="text/html;charset=UTF-8" />
	<title>PHP Takvim</title>
</head>
<body>
 
<form method="get">
 
<select name="ay">
<?Php
for($i = 1; $i<=12; $i++)
	if($i == $ay)	
		echo '<option value="',$i,'" selected>',$dizi_ay[$i],'</option>';
	else
		echo '<option value="',$i,'">',$dizi_ay[$i],'</option>';
	?>
</select>
 
<select name="yil">
<?Php
for($j = 2011; $j<=2016; $j++)
	if($j == $yil)	
		echo '<option value="',$j,'" selected>',$j,'</option>';
	else
		echo '<option value="',$j,'">',$j,'</option>';
?>
</select>
 
<input type="submit" name="getir_btn" value="Git"/>
</form>
 
<?Php
$ilk_gun = mktime(0,0,0,$ay,1,$yil);
	
$bgun = date('w', $ilk_gun);
$sgun = date('t', $ilk_gun);
	
if($bgun == 0)
	$bgun = 7;
	
echo '<table border="1" cellpadding="3" cellspacing="0">';
echo '<tr bgcolor="#cfcfcf">
	<td>Pt</td>
	<td>Sa</td>
	<td>Ça</td>
	<td>Pe</td>
	<td>Cu</td>
	<td>Ct</td>
	<td>Pz</td>
	</tr>';
	echo '<tr>';
	
$gsay = 1;
for($i = 1; $i<=7; $i++)
	if($i<$bgun)
		echo '<td> </td>';
	else
		echo '<td>',($gsay++),'</td>';
	
echo '</tr>';
	
$hafta = floor(($sgun - $bgun) / 7);
	
$gsay--;
for($i=0; $i<=$hafta; $i++){		
	echo '<tr>';
	
for($j=1; $j<=7; $j++)				
	if($gsay == $sgun)      
		break;
	else
		if(++$gsay == date('d'))
		echo '<td bgcolor="green">',$gsay,'</td>';
		else
		echo '<td>',$gsay,'</td>';
		
		echo '</tr>';
}
echo '</table>';
?>
</body>
</html>