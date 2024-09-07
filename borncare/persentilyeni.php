<!DOCTYPE html>
<center>
<style>
body{

  background-color: #cccccc; /* Used if the image is unavailable */
  height: auto; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */

}

 
.box{
	opacity: 0.8;
	border-radius:20px;
	background-color:#F2E1A6;
 	padding:100px;
 	margin-top:200px;
 	margin-bottom:200px;
 	margin-left:400px;
 	margin-right:400px; 
}

</style>
</center>
<php>
<body background="https://hamileyim.net/wp-content/uploads/2018/11/ay-ay-bebek-gelisimi.jpg">
<center>
<div> 
<div class ="box">
<form action="inputgrowth.php" method="get">
<p>Please select month:</p>
<select input name="ay" required>
         <option value="1">1.Month</option>
         <option value="2">2.Month</option>
         <option value="3">3.Month</option>
         <option value="4">4.Month</option>
         <option value="5">5.Month</option>
         <option value="6">6.Month</option>
         <option value="7">7.Month</option>
         <option value="8">8.Month</option>
         <option value="9">9.Month</option>
         <option value="10">10.Month</option>
         <option value="11">11.Month</option>
         <option value="12">12.Month</option>
         <option value="13">13.Month</option>
         <option value="14">14.Month</option>
         <option value="15">15.Month</option>
         <option value="16">16.Month</option>
         <option value="17">17.Month</option>
         <option value="18">18.Month</option>
         <option value="19">19.Month</option>
         <option value="20">20.Month</option>
         <option value="21">21.Month</option>
         <option value="22">23.Month</option>
         <option value="24">24.Month</option>
      


      </select>
      <br>
      <br>



<form action="inputgrowth.php" method="get">
<p>Please select gender of your baby:</p>
  <input type="radio" name="gender" value="boy" required > Boy<br>
  <input type="radio" name="gender" value="girl"required> Girl
<br><br>
Height in cm :<br>
  <input type="number"  name="cm" required >
  <br><br>
  Weight in kg :<br>
  <input type="number" name="kg" placeholder="0.0" step="0.01" required >





<br>
<br>
<td><input type="submit"  value="Calculate"</td>



</body>
</php>
</div> </div>
</center> 
</html>
