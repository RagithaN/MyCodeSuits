<html>
<head>

<?php

$bookid=$_POST['Book_ID'];
$customerid=$_POST['Customer_ID'];
$issuedate=$_POST['Issue_Date'];
$returndate=$_POST['Return_Date'];
$return=$_POST['Return'];
 

$connect=mysqli_connect('localhost','root','','LibraryManagementDB');

if(mysqli_connect_errno())
{
	$error=mysqli_connect_error;
	echo "failed to connect".$error;
}
else
{
	$result=mysqli_query($connect,"INSERT INTO `borrowdetails` (`BID`, `CID`, `borrow_date`, `return_date`, `return`) VALUES ('$bookid', '$customerid', '$issuedate', '$returndate', '$return');")or die(mysqli_error($connect));
	if($result)
	{
		$message = "entry Successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("issueDetails.html");
	}
	else
	{  
		$message = "entry failed";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("issueDetails.html");
	}
}
?>
</head>.
</html>