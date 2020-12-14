<html>
<head>

<?php
$uname=$_POST['uname'];
$oldpswd=$_POST['oldpsw'];
$newpswd=$_POST['newpsw'];



$connect=mysqli_connect('localhost','root','','LibraryManagementDB');

if(mysqli_connect_errno())
{
	$error=mysqli_connect_error;
	echo "failed to connect".$error;
}
else
{
	
	$result=mysqli_query($connect,"UPDATE `LoginCred` SET `uname`='$uname',`pswd`='$newpswd' WHERE `pswd`=$oldpswd");
	if($result)
	{ $message = "update Successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("MainPage2.html");
	}
	else
		
		{
			 $message = "update failed";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("MainPage2.html");
		}
		
		
	/* while($row=mysqli_fetch_array($result))
	{
	$name=$row['name'];
	$pswd=$row['pswd'];

	} */
	
}
/* if($username == $name && $passwd == $pswd)
{
	 $message = "Login Successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
		 include("MainPage2.html");
}
else{
 $message = "Invalid Credentials";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("loginPage.html");
}

?>
</head>.
</html> */