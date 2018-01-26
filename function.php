<?php

 function email_exists($email,$con)
 {
 	$result = mysqli_query($con,"SELECT id FROM registration WHERE email='$email'");
 	if (mysqli_num_rows($result) == 1)
 	{
 		return true ;
 	}
 	else
 	{
       return false ;
 	}
 }
 function email_existsv($email,$con)
 {
 	$result = mysqli_query($con,"SELECT userid FROM registration WHERE email='$email'");
 	if (mysqli_num_rows($result) == 1)
 	{
 		return true ;
 	}
 	else
 	{
       return false ;
 	}
 }
 function email_existsc($email,$con)
 {
 	$result = mysqli_query($con,"SELECT userid FROM registration WHERE email='$email'");
 	if (mysqli_num_rows($result) == 1)
 	{
 		return true ;
 	}
 	else
 	{
       return false ;
 	}
 }
function user_logged_in()
 {
 	if (isset($_SESSION['email'])|| isset($_SESSION['userid']))
    {
 		return true;
 	}
 	else
 	{
 		return false;
 	}
 }

 function logged_in()
 {
 	if (isset($_SESSION['email'])|| isset($_SESSION['vendor_id']))
    {
 		return true;
 	}
 	else
 	{
 		return false;
 	}
 }
function admin_logged_in()
 {
 	if (isset($_SESSION['email'])|| isset($_SESSION['id']))
    {
 		return true;
 	}
 	else
 	{
 		return false;
 	}
 }

?>