<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Basic JavaScript</title>
</head>
<body>
<div>
	<form method ="post" action="<?php echo$_SERVER('PHP_SELF'); ?>">
	<p>
		Enter First Name: <br/>
		<input type="text" name="firstname" id="firstname" size="30"/>
	</p>
	<p>
		<input type="button" value="Display Message v2"/>
		<input type="reset"/>
	</p>
</form>
</div>
<div id="messagediv">
	<?php
		function displayMessage()
		{
			$displayHTML = getFormInfo();
			print $displayHTML;
		}
		
		function getFormInfo()
		{
			$msg= "<p> Messages: <br/>";
			if (isset ($_POST['firstname']))
			{
				$firstname = $_POST['firstname'];
				$firstname_UC = strtoupper($firstname);
				
				if ($firstname_UC == 'AIKO')
				{
					$msg .= "<br/> You must be the Professor!";
				} else {
					$msg .= "<br/> You must be the student named " .$firstname;
				}	
			}else {
			 $msg = "<br/> none!";
			}
		}
		return $msg;
		
	?>
</div>
</body>
</html>