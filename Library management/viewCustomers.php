<html>
<head>

<?php

 
$bookid=$_POST['BID'];
$connect=mysqli_connect('localhost','root','','LibraryManagementDB');

if(mysqli_connect_errno())
{
	$error=mysqli_connect_error;
	echo "failed to connect".$error;
}
else
{
	$result=mysqli_query($connect,"select CID,borrow_date,return_date FROM borrowdetails WHERE BID=$bookid;")or die(mysqli_error($connect));
	/* include("checkBook.html"); */
	/* while($row=mysqli_fetch_array($result))
	{
	$name=$row['name'];
	$pswd=$row['pswd'];

	} */
	if($result)
	{
		include("viewCustomers.html"); 
	}
	
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
 */
?>