<?php

session_start();

include("dbconnect.php");
//GUN
//AY
//YIL

$gun=$_SESSION["bday"];
$ay=$_SESSION["bmonth"];
$yil=$_SESSION["byear"];

//echo "Doğum : Gün:".$gun." Ay:".$ay." Yıl".$yil."<br>";
$aylar = array(1,2,3,4,5,6,7,8,9,10,11,12);
	/*"Ocak",
	"Şubat",
	"Mart",
	"Nisan",
	"Mayıs",
	"Haziran",
	"Temmuz",
	"Ağustos",
	"Eylül",
	"Ekim",
	"Kasım",
	"Aralık");*/

$periyot = array(0,1,3,5,11,17,23);

// AŞI TAKVİMİ HESAPLAMA
// 1.AŞI
// $vac1_u = $gun.".".$aylar[$ay-1].".".$yil;

 $vac1= "<b>Hepatitis B:</b>  ".$gun.".".$aylar[$ay-1].".".$yil."<br>";
 //echo "1.AŞI:" . $_SESSION["vac1"];
	
for ($i=0; $i <=6 ; $i++) { 
	
	
	# code...
	$bas=$i+2;
	$ekle = $periyot[$i];
	$tp = $ay + $ekle;
	
	if ($tp >= 12 ){
		
		
		$mod = $tp % 12;
		$temp = $mod;
		
		if(($temp <= $ay-1 && $ay <= 6) || ($temp < $ay-1 && ($ay > 6 && $ay < 9))) {
			$yil = $yil + 1;
		}
		else if($ay == 9 && ($i==2 || $i== 5)){
			$yil = $yil + 1;
		}else if ($ay == 10 && ($i==2 || $i== 5)){
			$yil = $yil + 1;
		}else if ($ay == 11 && ($i==1 || $i== 5)){
			$yil = $yil + 1;
		}else if ($ay == 12 && ($i==0 || $i== 5)){
			$yil = $yil + 1;
		}
		
		
		
		//echo $bas.".AŞI:".$gun.".".$aylar[$temp].".".$yil."<br>";
		
		if($bas == 2){
			//$vac2_u = $gun.".".$aylar[$temp].".".$yil;
			$vac2= "<b>Hepatitis B:</b>  ".$gun.".".$aylar[$temp].".".$yil."<br>";
			//echo "2.AŞI:" . $_SESSION["vac2"]; 
		}else if($bas == 3){
			//$vac3_u = $gun.".".$aylar[$temp].".".$yil;
			$vac3= "<b>Tuberculosis, TDAP and Pneumococcal:</b>  ".$gun.".".$aylar[$temp].".".$yil."<br>";
			//echo "3.AŞI:" . $_SESSION["vac3"];
		}else if($bas == 4){
			//$vac4_u = $gun.".".$aylar[$temp].".".$yil;
			$vac4= "<b>TDAP and Pneumococcal:</b>  ".$gun.".".$aylar[$temp].".".$yil."<br>";
			//echo "4.AŞI:" . $_SESSION["vac4"];
		}else if($bas == 5){
			//$vac5_u = $gun.".".$aylar[$temp].".".$yil;
			$vac5= "<b>Hepatitis B, TDAP and Salk:</b>  ".$gun.".".$aylar[$temp].".".$yil."<br>";
			$mvac="<b>Tetanus vaccine for mom:</b>  ".$gun.".".$aylar[$temp].".".$yil."<br>";
			//echo "5.AŞI:" . $_SESSION["vac5"];
		}else if($bas == 6){
			//$vac6_u = $gun.".".$aylar[$temp].".".$yil;
			$vac6= "<b>Pneumococcal, MMR and Chickenpox:</b>  ".$gun.".".$aylar[$temp].".".$yil."<br>";
			//echo "6.AŞI:" . $_SESSION["vac6"];
		}else if($bas == 7){
			//$vac7_u = $gun.".".$aylar[$temp].".".$yil;
			$vac7= "<b>TDAP, Salk and Hepatitis A:</b>  ".$gun.".".$aylar[$temp].".".$yil."<br>";
			//echo "7.AŞI:" . $_SESSION["vac7"];
		}else if($bas == 8){
			//$vac8_u = $gun.".".$aylar[$temp].".".$yil;
			$vac8= "<b>Hepatitis A:</b>  ".$gun.".".$aylar[$temp].".".$yil."<br>";
			//echo "8.AŞI:" . $_SESSION["vac8"];
		}
		
		
}else{
			//echo $bas.".AŞI:". $gun.".".$aylar[$ay + $ekle].".".$yil;
		
		if($bas == 2){
			//$vac2_u = $gun.".".$aylar[$ay + $ekle].".".$yil;
			$vac2= "<b>Hepatitis B:</b>  ". $gun.".".$aylar[$ay + $ekle].".".$yil."<br>";
			//echo "2.AŞI:" . $_SESSION["vac2"];
		}else if($bas == 3){
			//$vac3_u = $gun.".".$aylar[$ay + $ekle].".".$yil;
			$vac3= "<b>Tuberculosis, TDAP and Pneumococcal:</b>  ". $gun.".".$aylar[$ay + $ekle].".".$yil."<br>";
			//echo "3.AŞI:" . $_SESSION["vac3"];
		}else if($bas == 4){
			//$vac4_u = $gun.".".$aylar[$ay + $ekle].".".$yil;
			$vac4= "<b>TDAP and Pneumococcal:</b>  ". $gun.".".$aylar[$ay + $ekle].".".$yil."<br>";
			//echo "4.AŞI:" . $_SESSION["vac4"];
		}else if($bas == 5){
			//$vac5_u = $gun.".".$aylar[$ay + $ekle].".".$yil;
			$vac5= "<b>Hepatitis B, TDAP and Salk:</b>  ". $gun.".".$aylar[$ay + $ekle].".".$yil."<br>";
			$mvac="<b>Tetanus vaccine for mom:</b>  ".$gun.".".$aylar[$ay + $ekle].".".$yil."<br>"; 
			//echo "5.AŞI:" . $_SESSION["vac5"];
		}else if($bas == 6){
			//$vac6_u = $gun.".".$aylar[$ay + $ekle].".".$yil;
			$vac6= "<b>Pneumococcal, MMR and Chickenpox:</b>  ". $gun.".".$aylar[$ay + $ekle].".".$yil."<br>";
			//echo "6.AŞI:" . $_SESSION["vac6"];
		}else if($bas == 7){
			//$vac7_u = $gun.".".$aylar[$ay + $ekle].".".$yil;
			$vac7= "<b>TDAP, Salk and Hepatitis A:</b>  ". $gun.".".$aylar[$ay + $ekle].".".$yil."<br>";
			//echo "7.AŞI:" . $_SESSION["vac7"];
		}else if($bas == 8){
			//$vac8_u = $gun.".".$aylar[$ay + $ekle].".".$yil;
			$vac8= "<b>Hepatitis A:</b>  ". $gun.".".$aylar[$ay + $ekle].".".$yil."<br>";
			//echo "8.AŞI:" . $_SESSION["vac8"];
		}
	}
	
	
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #f44336;
  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: #bbb;
}
</style>
</head>
<body>

<div id="myDIV" class="header">
  <h2 style="margin:5px"> <?php echo "Hello ".$_SESSION["username"].",Your Vaccination Schedule"; ?> </h2>
  
  
</div>

<ul id="myUL">
  <li> <?php echo $vac1; ?> </li>
  <li><?php echo $vac2; ?></li>
  <li><?php echo $vac3; ?></li>
  <li><?php echo $vac4; ?></li>
  <li><?php echo $vac5; ?></li>
  <li><?php echo $mvac; ?></li>
  <li><?php echo $vac6; ?></li>
  <li><?php echo $vac7; ?></li>
  <li><?php echo $vac8; ?></li>
</ul>

<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

</body>
</html>


<?php

$dateTime = new DateTime();
echo $dateTime->format('d-m-Y');

	
$to = "borncaresystem@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: borncaresystem@gmai.com" . "\r\n";

mail($to,$subject,$txt,$headers);

?>

