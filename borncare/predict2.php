<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>

<script>
function chkcontrol(j) {
var total=0;
for(var i=0; i < document.form1.ckb.length; i++){
if(document.form1.ckb[i].checked){
total =total +1;}
if(total > 3){
alert("Please select only three") 
document.form1.ckb[j].checked = false ;
return false;
}
}
} 

</script>

</head>

<body  topmargin=''0'';  >

<div style= "background-color:#C5E2CC">
                               
                                <TD vAlign=top align=middle>
                                <TABLE id=table2 
                                style="MARGIN-TOP: -320px; MARGIN-BOTTOM: -250px" 
                                height=8 cellSpacing=8 cellPadding=8 width=20 
                                border=0>
                                <TBODY>
                                <TR>
                                
<div style="background:#FFF6ED"; width="48%">
<font face="Verdana" size="7" color="#408b74"> Predict Illnesses </font>

<form name=form1 method=post action="">

<td ><input type=checkbox name=fever class=ckb value=1 onclick='chkcontrol(0)';></td><td >Fever</td></tr><br></br>
<td ><input type=checkbox name=ysc class=ckb value=2 onclick='chkcontrol(1)';></td><td >Yellow Skin Color</td></tr><br></br>
<td ><input type=checkbox name=vomit class=ckb value=3 onclick='chkcontrol(2)';></td><td >Vomiting</td></tr><br></br>
<td ><input type=checkbox name=diarrhea class=ckb value=4 onclick='chkcontrol(3)';></td><td >Diarrhea</td></tr><br></br>
<td ><input type=checkbox name=ph class=ckb value=5 onclick='chkcontrol(4)';></td><td >Prickly Heat</td></tr><br></br>
<td ><input type=checkbox name=aphta class=ckb value=6 onclick='chkcontrol(5)';></td><td >Aphta</td></tr><br></br>
<td ><input type=checkbox name=sue class=ckb value=7 onclick='chkcontrol(6)';></td><td >Swelling Under Ear</td></tr><br></br>
<td ><input type=checkbox name=cough class=ckb value=8 onclick='chkcontrol(7)';></td><td >Cough</td></tr><br></br>
<td></td>
<td><button type=submit name=button onclick="opena()">FindDisease</button></td><br></br>


</form>
</div></TR></TBODY>
</TABLE>
</DIV>
</body>
</html>


<?php

if(isset($_POST['button'])){
	
	if(isset($_POST['fever']) && isset($_POST['ysc']) && isset($_POST['vomit'])){
		
		if(empty($_POST['diarrhea']) && empty($_POST['ph']) && empty($_POST['aphta'])&&empty($_POST['sue'])&& empty($_POST['cough'])){
			
			echo "deneme";
		}else {
		echo "deneme 2";
	}
}
}
																						  
																						  

?>


