<?php
$db=new mysqli('localhost', 'root','','bakery');
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
$sql= "INSERT into reg_baker VALUES('','".$email."','".$password."',now())";
$d= $db->query($sql);
if($d){
  echo "Login Successful";
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coffee Login</title>
  <link rel="stylesheet" href="login.css" />
</head>
<body>
  <div class="login-container">

    <div class="left-side">
      <div class="overlay">
        <h1>Welcome 🍞🥐🍰🧁🍪😋</h1>
        <img src="./images/man-2557408_640.jpg" alt="" >
      </div>
    </div>


    <div class="right-side">
      <div class="form-box">
        <h2>Login to Your Account</h2>
        <form action="" method="post">
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter your email" required />

          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required />

          <button type="submit" name="submit">Login</button>

          <p class="forgot"><a href="#">Forgot Password?</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
