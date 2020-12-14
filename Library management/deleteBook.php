<html>
<head>

<?php
$bookid=$_POST['Book_ID'];
$booktitle=$_POST['Book_Title'];
$author=$_POST['Author'];
$editors=$_POST['Editors'];
$yearofedition=$_POST['Year_Of_Edition'];
$ISBN=$_POST['ISBN'];


$connect=mysqli_connect('localhost','root','','LibraryManagementDB');

if(mysqli_connect_errno())
{
	$error=mysqli_connect_error;
	echo "failed to connect".$error;
}
else
{
	
	$result=mysqli_query($connect,"UPDATE `bookdetails` SET `title`='$booktitle',`author`='$author',`editors`='$editors',`year_of_edition`=$yearofedition,`ISBN`=$ISBN WHERE `BID`=$bookid");
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