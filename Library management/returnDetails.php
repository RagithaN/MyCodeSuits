<html>
<head>

<?php
$customerid=$_POST['Customer_ID'];
$bookid=$_POST['Book_ID'];
$returndate=$_POST['Return_Date'];
$issuedate=$_POST['Issue_Date'];
$return=$_POST['Return'];


$connect=mysqli_connect('localhost','root','','LibraryManagementDB');

if(mysqli_connect_errno())
{
	$error=mysqli_connect_error;
	echo "failed to connect".$error;
}
else
{
	
	$result=mysqli_query($connect,"UPDATE `borrowdetails` SET `CID`='$customerid',`return_date`='$returndate',`return`='$return', WHERE `BID`=$bookid && 'issue_date'=#issuedate");
	if($result)
	{ $message = "update Successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("issueDetails.html");
	}
	else
		
		{
			 $message = "update failed";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("issueDetails.html");
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