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
	$result=mysqli_query($connect,"INSERT INTO `bookdetails` (`BID`, `title`, `author`, `editors`, `year_of_edition`, `ISBN`) VALUES ('$bookid', '$booktitle', '$author', '$editors', '$yearofedition', '$ISBN');")or die(mysqli_error($connect));
	if($result)
	{
		$message = "entry Successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{  
		$message = "entry failed";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
?>
</head>.
</html>