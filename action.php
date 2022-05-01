<?php

include 'config.php' ;


if(isset($_POST['submit'])){

$name =  $_POST['name'];
$email = $_POST['email'];
$number =  $_POST['number'];
$password =  $_POST['password'];

  
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO mdtable (name, email, number, password) VALUES ('$name', 
    '$email',' $number','$password')";
  
if($conn->query($sql)){
    echo "<h3>data stored in a database successfully </h3>.
  ";  

  
 
  


    
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
   
// Close connection
mysqli_close($conn);



}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>






<div class="card text-center">
  <div class="card-header">
    Welcome to my website
  </div>
  <div class="card-body">
    <h5 class="card-title">Hi..  </h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="product.php" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>



