<?php 
require 'connection.php';
if(isset($_POST['log'])){
  $name = $_POST["name"];
  $pno = $_POST["pno"];
  $email = $_POST["email"];
  $ad1 = $_POST["ad1"];
  $ad2 = $_POST["ad2"];
  $psw = $_POST["psw"];
  $query ="INSERT INTO rider VALUES('','$name','$pno','$email','$ad1','$ad2','$psw','','','')";
  mysqli_query($connect,$query);
  echo"<script>alert('data entered');
  document.location.href='login_page1.php' </script>";
}
else{
  echo"<script>alert('data not entered');</script>";
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style>
      * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.box{
  width: 50%;
  margin-left: 25%;
  border: 2px solid lightgreen;
  border-radius:4px;
}
    </style>
  <div class="box">
    <form action="" method="post">
  <div class="container">
    <div class="register" style="text-align:center">
      <h1>Register</h1>
    </div>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Full Name" name="name" id="name" required>
    <label for="pno"><b>Phone Number</b></label>
    <input type="text" placeholder="Phone number" name="pno" id="pno" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="address"><b>Address Line 1</b></label>
    <input type="text" placeholder="Address Line 1" name="ad1" id="ad1" required>

    <label for="address"><b>Address Line 2</b></label>
    <input type="text" placeholder="Address Line 2" name="ad2" id="ad2" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <button type="submit" name="log">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login_page1.php"<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>

      </body>
    </html>Sign in</a>.</p>
  </div>
</form>

  </div>
  </body>
</html>
