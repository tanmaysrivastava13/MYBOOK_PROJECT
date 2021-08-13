<?php
$con =mysqli_connect('localhost','root','','session');

   $email =$_POST['email'];
   $username=$_POST['username'];
   $password =$_POST['password'];
   $confirm =$_POST['confirm'];
   $filename=$_FILES["uploadfile"]["name"];
   $tempname=$_FILES["uploadfile"]["tmp_name"];
   $folder= "student/".$filename;
   move_uploaded_file($tempname, $folder);

    if($password==$confirm)
   {   
     $query="Select email_address From signup WHERE email_address='$email';";
     $query_run=mysqli_query($con,$query); 
      if(mysqli_num_rows($query_run)>0)
    {   
       	echo '<script type="text/javascript"> alert ("email Id already exits Try Again")

          window.location="http://localhost/tanmayphp/login.php";
        </script>';
     }
      else
    {

	   $query = "insert into signup values( id_,'$email','$username','$password','$confirm','$folder')";
       $query_run= mysqli_query($con,$query);
      if($query_run)
     {    
session_start();
$con =mysqli_connect('localhost','root','','session');
echo " connection sucessfull";
if(isset($_POST['submit']))
{
    $query ="Select * FROM signup WHERE email_address='$email' && password='$password'";
    $data =mysqli_query($con,$query);
    $total =mysqli_num_rows($data);    
    if($total==1){
            $_SESSION['emailadd']= $email;
            header ('location:home.php');
    } 
      
     }
   }
     else
     {
    	echo '<script type="text/javascript"> alert ("signup failed Try Again!")
         window.location="http://localhost/tanmayphp/login.php";
      </script>';
     }
    }
   }
   
 else
{
	echo '<script type="text/javascript"> alert ("password and confirm password does not match Try Again!")
   window.location="http://localhost/tanmayphp/login.php";</script>';
}


?>	