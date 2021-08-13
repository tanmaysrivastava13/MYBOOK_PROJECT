<html>
<head>
<title > Form </title>
</head>
<body bgcolor="white">
<h1 align="Center" style="color:Red"> <b><u><i> User Registration Form </i></u></b></h1>
<form method="post" action="usercon.php">
<fieldset align="center">
<legend><h1>Enter The Details Below</h1> </legend>
<label>First Name :</label><input type="text" name="fname" placeholder="First
Name Here">
<label> Last Name :</label><input type="text" name="lname" placeholder="Last
Name Here ">
<br>
<br>
<label> Email ID : </label><input type="email" name="mail"
placeholder="ex:hello@yahoo.com">
<label> DoB : </label> <input type="date" name="dob" placeholder="Choose Here Date"
>
<br><br>
<label>Password :</label><input type="Password" name="pass"
placeholder="Password here">
<label>confirm Password :</label><input type="Password" name="conpass"
placeholder="Password here">
<br><br>
<label for="img"> Choose Image : <label> <input type="file" name="img" placeholder="
Image here " >
<label> Gender : </label> <input type="text" type="gen" placeholder="fill the gender">
<br>
<br>
<label> Enter Your Hobbiey Here</label> <input type="textarea" name="hoby"
placeholder ="PLase Write Your Hobbiey here:" style="width:400px; height:50px">
<br>
<h1 align="center" > <input type="submit" name="submit" value="click Me"
style="width:100px; height:50px"></h1>
</fieldset>
</form>
</body>
</html>