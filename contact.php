<?php
$insert = false;
if(isset($_POST['email'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    // Create a database connection
  
    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
   
    
    // Collect post variables
     $email = $_POST['email'];
    $desc = $_POST['desc'];
    
    if(empty($email))
    {
      echo "The Email and Description Cant Be Empty";
  
    }
    else{
    $sql = "INSERT INTO `users`.`entry` ( `email`, `desc`, `date`)
     VALUES ( '$email', '$desc', CURRENT_TIMESTAMP);";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: TO Submeeting Form";
    }
  
  
  }
   
  
    // Close the database connection
    $con->close();
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="script" href="bootstrap.js">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet"> 
    <title>Contact form</title>
    <style>
    h1{
      font-family: 'Oswald', sans-serif;}
      textarea,input,label{
        font-family: 'Pangolin', cursive;
      }
      </style>
  </head>
  <body>
  <?php require 'partials/_nav.php' ?>
  <?php
    if($insert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank You!</strong> for contacting us we will inform you later
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          
        </button>
    </div> ';
    }
    ?>
    
  <div class="container mt-4 align-items-center justify-content-center">
    <h1 class="text-center">Contact Us</h1>
    <form method="post" action="contact.php">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Suggetion</label>
  <textarea class="form-control"  name="desc" id="exampleFormControlTextarea1" rows="3" column="5"></textarea>
</div>
<button type="reset" class="btn btn-danger text-center">Reset</button>
<button type="submit" class="btn btn-success text-center">Success</button>
</div>

</form>


<nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item ">
            <a class="page-link" href="about.php" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item "><a class="page-link" href="index.php">1</a></li>
          <li class="page-item"><a class="page-link" href="about.php">2</a></li>
          <li class="page-item disabled"><a class="page-link" href="contact.php">3</a></li>
          <li class="page-item"><a class="page-link" href="aboutme.php">4</a></li>
          <li class="page-item">
            <a class="page-link" href="aboutme.php">Next</a>
          </li>
        </ul>
      </nav>







    <footer class="container">
    
        <p class="float-mid"><a href="logout.php">Log Out</a></p>
        <p class="float-end"><a href="#">&nbsp;&nbsp;&nbsp;Back to top</a></p>
        <p>© 2020–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
