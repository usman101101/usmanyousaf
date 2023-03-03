



<?php
 
 include 'connect.php';
    $id=$_GET['updated'];

    $fetch = mysqli_query($conn, "SELECT * FROM crud WHERE id='$id'");
    if($fetch){

      $student= mysqli_fetch_assoc($fetch);
    }else{

      echo "Not Working";
    }






 if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password= $_POST['password'];




    $sql= "UPDATE `crud` SET id='$id', name='$name', email='$email', mobile='$mobile', password='$password'
    WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Updated";
        header('location:display.php');
    }else{
        echo "Badless faild";
    }
 }


?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <title>Update</title>
</head>
<body>


<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label  class="form-label">Name:</label>
    <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Enter Your Name" value="<?=$student ['name']?>">
  </div>

  <div class="mb-3">
    <label  class="form-label">Email:</label>
    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Enter Your Email" value="<?=$student ['email']?>" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Mobile:</label>
    <input type="text" class="form-control" name="mobile" autocomplete="off" placeholder="Enter Your Mobile Number" value="<?=$student['mobile']?>">
  </div>

  <div class="mb-3">
    <label  class="form-label">Password:</label>
    <input type="password" name="password" autocomplete="off" placeholder="Enter Your Password" class="form-control"  >
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    
</body>
</html>




