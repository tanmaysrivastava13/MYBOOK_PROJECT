<!--top-bar-->
<?php
	$corner_image = "images/user_male.jpg";
		if(isset($USER) )
		{
			if(file_exists($USER['profile_image']))
				{
					$image_class = new Image();
					$corner_image=$image_class->get_thumb_profile($USER['profile_image']);
				}
				else
				{
					if($USER['gender'] == "Female")
					{
						$corner_image = "images/user_female.jpg";
					}
				}
		}

?>
	<div id="blue_bar">
		<form method ="get" action="search.php" > 
				<div style="width:800px;margin:auto;font-size:30px;">

					<a href="index.php" style="color:#d0d8e4;text-decoration:none" >MyBook</a>

					
					 	&nbsp &nbsp <input type="text" id="search_box" name="find" placeholder="Search for people">
			</form>
			 <a href="profile1.php">
			<img src="<?php echo $corner_image ?>" style="width:50px; float:right;">
			</a>
			<a href="logout11.php">
			<span style="font-size:11px;float: right;margin:20px;color:white;">Logout</span></a>
		</div>
	</div>