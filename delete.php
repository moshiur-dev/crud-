<?php

$host="localhost";
  $user="root";
  $pass="";
  $db="crud1";
  
  $conn=mysqli_connect($host,$user,$pass);

  $db_connect=mysqli_select_db($conn,$db);

  $id=$_POST['id'];

  $query="DELETE FROM student WHERE id='$id'";
  $query_run=mysqli_query($conn,$query);

if(isset($_POST['delete'])){
    $id=$_POST['id'];

    if($query_run){
        echo "<script>alert('data delete successfully');</script>";
        header('location:index.php');

    }
    else{
        echo "<script>alert('data not delete ');</script>";
    }
}




?>