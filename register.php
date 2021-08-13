<?php
$con =mysqli_connect('localhost','root','','contact');

$email =$_POST['email'];
$issue=$_POST['issue'];
$example=$_POST['example'];
$member=$_POST['member'];

$q = "insert into contact1 values(id_,'$email','$issue','$example','$member');";
mysqli_query($con,$q);
echo '<script type="text/javascript"> alert ("your contact form successfully filed")

 window.location="http://localhost/tanmayphp/contact.php";

</script>';

?>	