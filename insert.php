<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Insert Data</title>
  </head>
  <body>
    <div class="container">
        <div class="jumborton">
            <h1>Add your Data</h1>
        </div>
        <hr>
        <div class="form-area">
        <form method="post">
            <div class="form-group">
                <label>First name</label>
                <input type="text" name="fname" palceholder="Enter your first name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Last name</label>
                <input type="text" name="lname" palceholder="Enter your last name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" palceholder="Enter your Contact" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="insert">Save data</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php
 $host="localhost";
 $user="root";
 $pass="";
 $db="crud1";
 
 $conn=mysqli_connect($host,$user,$pass);

 $db_connect=mysqli_select_db($conn,$db);


 if(isset($_POST['insert'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    
    $query="INSERT INTO student (fname,lname,contact) VALUES('$fname','$lname','$contact')";
    $query_run=mysqli_query($conn,$query);


    if($query_run){
        echo '<script>alert("Data insert successfully");</script>';
    }
    else{
        echo '<script>alert("Data no saved");</script>';
    }

 }


?>