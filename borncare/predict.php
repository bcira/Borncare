<html>
<head>
<title></title>
<META NAME="DESCRIPTION" CONTENT="">
<META NAME="KEYWORDS" CONTENT="">

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
<script type="text/javascript">

function displayDate(x)
{
document.getElementById("demo").innerHTML=Date();

}
	<script>
function opena(){
	
		alert("deneme");
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

<td ><input type=checkbox name=ckb value=1 onclick='chkcontrol(0)';></td><td >Fever</td></tr><br></br>
<td ><input type=checkbox name=ckb value=2 onclick='chkcontrol(1)';></td><td >Yellow Skin Color</td></tr><br></br>
<td ><input type=checkbox name=ckb value=3 onclick='chkcontrol(2)';></td><td >Vomiting</td></tr><br></br>
<td ><input type=checkbox name=ckb value=4 onclick='chkcontrol(3)';></td><td >Diarrhea</td></tr><br></br>
<td ><input type=checkbox name=ckb value=5 onclick='chkcontrol(4)';></td><td >Prickly Heat</td></tr><br></br>
<td ><input type=checkbox name=ckb value=6 onclick='chkcontrol(5)';></td><td >Aphta</td></tr><br></br>
<td ><input type=checkbox name=ckb value=7 onclick='chkcontrol(6)';></td><td >Swelling Under Ear</td></tr><br></br>
<td ><input type=checkbox name=ckb value=8 onclick='chkcontrol(7)';></td><td >Cough</td></tr><br></br>
<td></td>
<td><button onclick="opena()">FindDisease</button></td><br></br>


</form>
</div></TR></TBODY>
</TABLE>
</DIV>
</body>

</html>





