<?php
session_start();

include("dbconnect.php");


if(isset($_POST['btnreg'])){
	
$fname_u = $_POST['u_fname'];

$lname_u = $_POST['u_lname'];

$username_u = $_POST['u_username'];

$email_u = $_POST['u_email'];

$password_u = $_POST['u_password'];

$bname_u = $_POST['u_bname'];

$bday_u = $_POST['u_bday'];
	
$bmonth_u = $_POST['u_bmonth'];
	
$byear_u = $_POST['u_byear'];

$gender_u = $_POST['u_gender'];
	

	
if($con -> exec("INSERT INTO user (fname,lname,username,email,password,bname,bday,bmonth,byear,gender) VALUES ('$fname_u','$lname_u','$username_u','$email_u','$password_u','$bname_u','$bday_u','$bmonth_u','$byear_u','$gender_u')")) {
	
		
		header("Location:login.php");
	    
	
}else{
	echo("Failed");
	
}

}

if(isset($_POST['btnlogin'])){
	
	$username_u = $_POST['u_username'];
	$password_u = $_POST['u_password'];
	
	$getUser = $con -> prepare("SELECT * FROM user where username =?");
	$getUser -> execute(array($username_u));
	
	if($getUser -> rowCount()){
		
		foreach($con -> query("SELECT * FROM user where username = '$username_u'") as $recvUserDatas){
			
			$current_password = $recvUserDatas['password'];
			$id = $recvUserDatas['id'];
			
			if($password_u == $current_password){
				
				$_SESSION["login"] = "true";
				$_SESSION["username"] = $username_u;
				$_SESSION["password"] = $password_u;
				$_SESSION["email"] = $email_u;
				$_SESSION["fname"]= $recvUserDatas['fname'];
				$_SESSION["lname"]= $recvUserDatas['lname'];
				$_SESSION["email"]= $recvUserDatas['email'];
				$_SESSION["bname"]= $recvUserDatas['bname'];
				$_SESSION["gender"]= $recvUserDatas['gender'];
				$_SESSION["bday"]= $recvUserDatas['bday'];
				$_SESSION["bmonth"]= $recvUserDatas['bmonth'];
				$_SESSION["byear"]= $recvUserDatas['byear'];
				$_SESSION["id"] = $id;
				
				//if($con -> exec("INSERT INTO vacc (username) VALUES ('$username_u')")){
					header("Location:anasayfaa.php?id=$id");
				//}else{
					echo "Failed";
				//}
				
				
				
			}else{
				echo "Şifre Yanlış";
			}
		}
		
		}
	        else{
			echo "Kullanıcı bulunamadı";
	}
	}

/*if(isset($_POST['btn'])){
	
	if(isset($_POST['btn'])){
	
	if($con -> exec("INSERT INTO vacc (vac1,vac2,vac3,vac4,vac5,vac6,vac7,vac8) VALUES ('$vac1_u','$vac2_u','$vac3_u','$vac4_u','$vac5_u','$vac6_u','$vac7_u','$vac8_u')")){
		
		$getVacc = $con -> prepare("SELECT * FROM vacc where username =?");
	    $getVacc -> execute(array($username_u));
		
		if($getVacc -> rowCount()){
		
		foreach($con -> query("SELECT * FROM username = '$username_u'") as $recvVaccDatas){
			
			    $_SESSION["vac1"]= $recvVaccDatas['vac1'];
				$_SESSION["vac2"]= $recvVaccDatas['vac2'];
				$_SESSION["vac3"]= $recvVaccDatas['vac3'];
				$_SESSION["vac4"]= $recvVaccDatas['vac4'];
				$_SESSION["vac5"]= $recvVaccDatas['vac5'];
				$_SESSION["vac6"]= $recvVaccDatas['vac6'];
				$_SESSION["vac7"]= $recvVaccDatas['vac7'];
				$_SESSION["vac8"]= $recvVaccDatas['vac8'];
				
		}
		}
		
	}
}

	
}*/


	
	


	




							 
	
 

?>

