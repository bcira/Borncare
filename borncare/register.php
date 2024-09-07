<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=email], input[type=password], input[type=text], input[type=date], select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus, input[type=text]:focus, input[type=date]:focus, select:focus  {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
	</style>
</head>
<body>

<form method="post" action="register_ok.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fname"><b>Enter First Name</b></label>
    <input type="text" placeholder="Your first name" name="u_fname" required>
    
    <label for="lname"><b>Enter Last Name</b></label>
    <input type="text" placeholder="Your last name" name="u_lname" required>
    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="u_username" required>
    
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="u_email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="u_password" required>
    
    <label for="bname"><b>Enter Your Baby's Name</b></label>
    <input type="text" placeholder="Your baby's name" name="u_bname" required>
    
    <label for="bdate"><b>Enter Baby's Birthday</b></label>
    <input type="date" placeholder="Day" name="u_bday" required>
    <input type="date" placeholder="Month" name="u_bmonth" required>
    <input type="date" placeholder="Year" name="u_byear" required>
    
    <label for="gender"><b>Baby's Gender</b></label>
    <select id="gender" name="u_gender">
      <option value="girl">Girl</option>
      <option value="boy">Boy</option>
    </select>
    <hr>
    
	  <button type="submit" name="btnreg" class="registerbtn">Register </button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>



