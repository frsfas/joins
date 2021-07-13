<html>

	<head>
		<title>project</title>
	</head>

	<body>
		<?php
			include_once("conn.php");
			if(isset($_POST['submit']))
			{
				$name=mysqli_real_escape_string($conn,$_POST['name']);
				$email=mysqli_real_escape_string($conn,$_POST['email']);
				$picture=mysqli_real_escape_string($conn,$_POST['picture']);
				if(empty($name)||empty($email)||empty($picture))
				{
					if ((empty($name))) 
					{
						echo"<font color='#00ff00'>name field is empty</font></br>";
					}
						if ((empty($email))) 
					{
						echo"<font color='#00ff00'>email field is empty</font></br>";
					}
						if ((empty($picture)))
					{
						echo"<font color='#00ff00'>picture field is empty</font></br>";
					}
						echo"<br/><a href='javascript:self.history.back()'>go back</a>";
				}
				else
				{
					$result=mysqli_query($conn,"insert into users(name,email,picture)values('$name','$email','$picture')");
					echo"<font color='#00ff00'>data added successfully</font></br>";
					echo"<br/><a href='indexes.php'>view result</a>";
				}  
			}
		?>
	</body>

</html>