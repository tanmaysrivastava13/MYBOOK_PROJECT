<!DOCTYPE html> 
<html> 
<body> 
<style type="text/css"> 
 div{ 
  text-align: center; 
  font-size: 34px; 
  margin-top:30px;  
  border: 2px solid black; 
  width :50%; 
  margin-left: 300px;  
  background: green; 
 } 
</style> 
<?php 
$val_degree=55; 
$val_radian=$val_degree*(pi()/180); 
echo "<div>Value in degree = ".$val_degree." deg"," <br> Value in radian = ".$val_radian." radian"," <br></div>"; 
$val_radian; 
$val_degree=$val_radian*(180/pi()); 
echo "<div>Value in radian = ".$val_radian." radian"," <br> Value in degree = ".$val_degree." deg"," <br></div>"; 

 
 
?> 
</body> 
</html> 
 
 