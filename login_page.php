<?php
  session_start();
  require 'connection.php';
    if(isset($_POST['log'])){
      $latitude = $_POST["latitude"];
              $longitude = $_POST["longitude"];
              $query1 ="INSERT INTO users VALUES('','','','','','','','','','','','$latitude','$longitude')";
              mysqli_query($connect,$query1);
        $query = "select * from users where email ='$_POST[email]' AND psw = '$_POST[psw]'";
        $query_run = mysqli_query($connect,$query);
        if(mysqli_num_rows($query_run)){
            while($row =mysqli_fetch_assoc($query_run))
            {
                $_SESSION['email'] = $row['email'];
                echo"<script>
                alert('Login Succesful');
                window.location.href ='profile.php';
                </script>;";
            }
        }
        else{
            echo"<script> alert('Enter correct value');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 5px;
      margin: 6px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
    .box1{
      width:35%;
      margin-left: 35%;
      margin-top:30px;
      border: 2px solid black;
      border-radius:4px;
      background-color:#E8F9FD;
    }
    </style>
  </head>
  <body onload = "getlocation();">
    <div class="box1">


      <form class="myForm" method="post">
          <h2 style="text-align:center;">Login Form</h2>
        <div class="imgcontainer">
          <img src="Images/android-chrome-192x192.png" alt="login-photo">
        </div>

        <div class="container">
          <label for="email"><b>email</b></label>
          <input type="text" placeholder="Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <div class="loc" style="display:none">
        <input type="text" name="latitude" required value ="">
        <input type="text" name="longitude" required value ="" ><br>
        </div>
          <button type="submit" name ="log" style="background-color:#112B3C">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style= "background-color:#E8F9FD; margin-left:170px; margin-bottom:10px">
          <!-- <span class="psw"><a href="#">Forgot password?</a></span> -->
          New User? <a href="register.php">Start here</a>
        </div>
      </form>
    </div>
    <script type ="text/javascript">
        function getlocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showposition,showError);
            }
        }
        function showposition(position){  
            document.querySelector('.myForm input[name ="latitude"]').value=position.coords.latitude;
            document.querySelector('.myForm input[name ="longitude"]').value=position.coords.longitude;
        }
        function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                    alert("turn ON the location");
                    location.reload();
                    break;
            }
        }
    </script>
  </body>
</html>
