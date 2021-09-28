<?php 
	$x=$_POST['userid'];
	$y=$_FILES['files'];
	//$tempname=isset($_FILES['files']["tmp_name"]);
	echo "HELLO $x";

	//move_uploaded_file($tempname,$y);
	//print "<img src=\"$y\" width=\"400\" height=\"400\"/>";
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> YOUR OWN TAB</title>
	<style type="text/css">
	 	body{
	 		background-color: indianred;
	 	}
		h1{
			text-align: center;
			background-color: darkred ;
			text-decoration-color: white;
			color: white;

		}
		#WELCOME{
			background-color: darkblue;
			color: wheat;
		}
		#HELLO{
			border-bottom-color: yellowgreen;
			background-color: yellowgreen;
			color: brown;
		}
		#HINDI{
			background-color: black;
			color: yellow;
		}
		
		#creater{
			text-align: right;
			text-underline-position: all;
			border-color: white;
			border: white;
			border-visualibility: visible;
		}



	</style>
</head>
<body>
	<h1><?php echo "HELLO $x";?></h1>
	<!----<img src=//<?php print $y ; ?>// width=400px height=400px/>
-->
	<!----<img src= <?php echo $y; ?>.jpg>
	-->
	<ul>
		<li id="WELCOME">
			WELCOME <?php echo $x ;?> TO YOUR OWN WEBSITE
		</li>
		<br>
		<br>
		<br>
		<li id="HELLO">
			I AM VERY THANKFULL <br>
			मैं आपके लिए बहुत आभारी हूं
		</li>
		<br>
		<br>
		<br>
		<li id="HINDI">
			याद रखे आप के लिए कुछ भी असंभव नहीं
			आप वह कर सकते हैं जो आपने कभी सोचा ही नहीं।<br/>
			Yaad rakhe aap ke liye kuchh bhi asambhav nahin 
			Aap woh kar sakte hain jo aapne kabhi socha hi nahin. 
		</li>
		<br>
		<br>
		<br>
		<li id="creater">
			MADE BY SHANTANU SINGH RATHORE
		</li>
	</ul>


</body>
</html>