<?php

	include("classes/autoload.php");


	$login = new Login();
	$user_data= $login -> check_login($_SESSION['mybook_userid']);
	$USER =$user_data;

	if(isset($_GET['id']) && is_numeric($_GET['id']) )
	{

		$profile= new Profile();
		$profile_data = $profile->get_profile($_GET['id']);

		if(is_array($profile_data))
		{
			$user_data = $profile_data[0];
		}

	}

	
//for posting

	if($_SERVER['REQUEST_METHOD']=="POST")
	{

		
			$post = new Post();
			$id = $_SESSION['mybook_userid'];
			$result = $post->create_post($id, $_POST,$_FILES);

			if($result == "")
			{
				header("Location:single_post.php?id=$_GET[id]");
			}
			else
			{
				echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
				echo "<br>Te following errors occured:<br><br>";
				echo $result ;
				echo "</div>";
			}
		
	}

	$Post = new Post();
	$ROW= false;
	
	$ERROR = "";
	if(isset($_GET['id']))
	{
		
		$ROW = $Post->get_one_post($_GET['id']);
	}
	else
	{
		$ERROR ="No post  was found!";
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title> Single Post | Mybook</title>
</head>
	<style >
	input:focus , textarea {
		outline: none;
	}

#blue_bar{
	height:50px;
	background-color: #405d9b;
	color:#d9dfeb;
}
#search_box{
	width: 400px;
	height: 20px;
	border-radius: 5px;
	border: none;
	padding: 4px;
	font-size: 14px;
	background-image: url(search.png);
	background-repeat: no-repeat;
	background-position: right;
}
#profile_pic{
	width: 150px;
	border-radius: 50%;
	border: solid 2px white;
}
#menu_buttons{
	width: 100px;
	display: inline-block;
	margin:2px;
}
#friends_img{
	width: 75px;
	float: left;
	margin:8px;
}
#friends_bar{
	min-height: 400px;
	margin-top:20px;
	padding: 8px;
	text-align: center;
	font-size: 20px;
	color: #405d9b;

}
#friends{
	clear: both;
	font-size: 12px;
	font-weight: bold;
	color: #405d9b;
}
textarea{
	width: 100%;
	border: none;
	font-family: tahoma;
	font-style: 70px;
}
#post_button{
	float: right;
	background-color: #405d9b;
	border: none;
	padding: 4px;
	font-size: 14px;
	border-radius: 2px;
	width: 50px;
}
#post_bar{
	margin-top: 20px;
	background-color: white;
	padding: 10px;

}
#post{
	padding: 4px;
	font-size: 13px;
	display: flex;
	margin-bottom: 20px;
}
</style>

<body style="font-family:tahoma;background-color:#d0d8e4;">
	<br>
	<?php 
	include("header.php");
	?>
	<!--cover-area-->
	<div style="width:800px; margin:auto;min-height:400px;">

		
	
	    <!--below cover-area-->
	    <div style="display:flex;">
	    
	    	<!--post-area-->
	    	<div style="min-height:400px;flex:2.5; padding:20px; padding-right:0px;">

	    		<div style="border:solid thin #aaa; padding:10px; background-color:white";>

	    			<?php

	    			$User = new User();
	    			$image_class = new Image();

	    			if(is_array($ROW))
	    			{
	    				
	    				$ROW_USER = $User->get_user($ROW['userid']);
	    				include("post.php");
	    			}
	    			

	    			?>
	    			<br style="clear:both;">

	    			<div style="border:solid thin #aaa; padding:10px; background-color:white";>
	    			<form method="post" enctype="multipart/form-data" >

		    			<textarea name="post" placeholder="Post a comment"></textarea>
		    			<input type="hidden"  name="parent" value="<?php echo $ROW['postid']?>" >
		    			<input type="file" name="file" >
		    			<input type="submit" id="post_button" value="Post">
		    			<br>
	    			</form>

	    		</div>

	    		<?php
	    			$comments= $Post->get_comments($ROW['postid']);

	    			if(is_array($comments))
	    			{
	    				foreach ($comments as $COMMENT)
	    				 {

	    				 	include("comment.php");
	    					# code...
	    				}
	    			}

	    		?>
	    			

	    		</div>
	    	





	    	</div>
	    </div>
	</div>




</body>
</html>