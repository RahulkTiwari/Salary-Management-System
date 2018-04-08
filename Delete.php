<?php
  
  
  $id=$_REQUEST['id'];  
  $userId=$_REQUEST['id'];
  mysql_connect("localhost","root","");
  
  mysql_select_db("sahil");
 
  $result="DELETE FROM user WHERE id='$id'";
  $result1="DELETE FROM calculator WHERE userId='$userId'";
  mysql_query($result);
  mysql_query($result1);
  
    header("location:adminCreate.php");
 
 //header("location:adminCreate.php");

 
 
 ?>