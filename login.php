<?php

include 'config.php' ;
$login = false;

if(isset($_POST['submit'])){

$email = $_POST['email'];
$password =  $_POST['password'];

  
// Performing insert query execution
// here our table name is college
$query = "SELECT * FROM mdtable WHERE email='$email' AND password='$password'";
  
$result = mysqli_query($conn,$query);
        $num = mysqli_num_rows($result);
        if($num == 1){
          $login = true ;
          header("Location: profile.php");

          
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
        header("Location: inde.php");
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

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
  rel="stylesheet"
/>
    
</head>
<body>
    
<div class="container">
<?php
if($login){
echo '<div class="alert alert-primary" role="alert">
  you are loged in your name is ' . $email . 
'</div>';
}
?>



<form style="width: 30%; margin:auto; margin-top:150px; " action="login.php" method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in" name="submit"></input>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="inde.php">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
</div>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
></script>
</body>
</html>