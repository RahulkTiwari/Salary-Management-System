


<?php
session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['username']))
 {
       unset($_SESSION['user_id']);
       unset($_SESSION['username']);
	   header("location:salary.html");
 }
 else
 { 
   echo "session not destroyed";
 }
?>