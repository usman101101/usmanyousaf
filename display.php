<?php

include 'connect.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS LIN -->
        <link rel="stylesheet" href="style.css">

      <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>display</title>
</head>

<body>




<!-- 
<div class="div">


 
  <h1>Tooltip</h1>
  <p title="name">Usman</p>

  <h1>Download</h1>
  <a href="https://www.w3schools.com/quiztest/quiztest.asp?qtest=JS download">Download</a>

  <p contenteditable="true"> Hellow Usman</p>
</div> -->










<div class="container">
  <div class="row">
    <div class="col-6 col-md-12 col-sm-3 bg-danger ">


    <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a></button>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Opreation </th>


    </tr>
  </thead>
  <tbody>

  <?php
  
  $sql= "SELECT * FROM `crud`";
  $result= mysqli_query($conn,$sql);
  if ($result) {
    while ($row=mysqli_fetch_assoc($result)) {
        $id= $row['id'];
        $name= $row['name'];
        $email= $row['email'];
        $mobile= $row['mobile'];
        $password= $row['password'];
        echo '
         <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
  <button class="btn btn-primary"><a href="update.php?updated='.$id.'" class="text-light">Update</a></button>
  <button class="btn btn-success"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>
        </tr>';
    }
 
  } 
  
  ?>

  
 

  </tbody>
</table>
</div>
</div>


</div>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    
</body>
</html>