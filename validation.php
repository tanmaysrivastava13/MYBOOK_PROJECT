<?php
session_start();
$con =mysqli_connect('localhost','root','','session');
echo " connection sucessfull";
if(isset($_POST['submit']))
{
	$email =$_POST['logemail'];
    $password =$_POST['logpassword'];
    $check =$_POST['check'];
    $query ="Select * FROM signup WHERE email_address='$email' && password='$password'";
    $data =mysqli_query($con,$query);
    $total =mysqli_num_rows($data);    
    if($total==1){
            $_SESSION['emailadd']= $email;
            header ('location:home.php');
    }
    else{
    	echo '<script type="text/javascript"> alert ("email Id already does not match. Try Again!!")

          window.location="http://localhost/tanmayphp/login.php";
        </script>';
    }


}

//$q = "insert into loginup values(ID_,'$email','$password','$check');";
//mysqli_query($con,$q);
//echo "inserted..."; 
 ///$value=mail ($email,"iCoder","login Sucessfull","From: tanmaysrivastava13cool@gmail.com");
	//echo $value;
//}
//else{
	//echo "email sendung failed.....";
//}
//header('location:home.php');
?>	