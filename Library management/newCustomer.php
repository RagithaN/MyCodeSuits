<html>
<head>

<?php

$customerid=$_POST['Customer_ID'];
$customername=$_POST['Customer_Name'];
$address=$_POST['Address'];
$email=$_POST['E-mail'];
$phone=$_POST['Phone'];
 

$connect=mysqli_connect('localhost','root','','LibraryManagementDB');

if(mysqli_connect_errno())
{
	$error=mysqli_connect_error;
	echo "failed to connect".$error;
}
else
{
	$result=mysqli_query($connect,"INSERT INTO `CustomerDetails` (`CID`, `name`, `address`, `email`, `phone`) VALUES ('$customerid', '$customername', '$address', '$email', '$phone');")or die(mysqli_error($connect));
	if($result)
	{
		$message = "entry Successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("newCustomer.html");
	}
	else
	{  
		$message = "entry failed";
        echo "<script type='text/javascript'>alert('$message');</script>";
		include("newCustomer.html");
	}
}
?>
</head>.
</html>