<?php
session_start();
    require 'connection.php';
    $name ="";
    $email ="";
    $credit ="";
    $query = "select * from users where email = '$_SESSION[email]'";
    $query_run = mysqli_query($connect,$query);
    $row1 = mysqli_fetch_assoc($query_run);
    $name = $row1['name'];
    $email = $row1['email'];
    $credits = $row1['credits'];
    $rows = mysqli_query($connect,"SELECT * FROM users ");
    $i = 1;
    foreach($rows as $row);
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .navigation{
      }
      .map{
        width:100%;
        height: 400px;
        margin-left: -10px;
        margin-right: -50px;
        margin-top: -10px;

      }
      .nav_credit{
      display:flex;
      flex-direction:row;
      }
      .nav{
        width: 40%;
        height: 300px;
        border: 4px solid skyblue;
        margin-right: 20%;
      }
      .credits{
        width: 40%;
        height: 300px;
        border: 4px solid skyblue;

      }
    </style>
  </head>
  <body>
    <div class="map">
        <iframe src="https://www.google.com/maps?q=<?php echo $row["latitude"]?>,<?php echo $row["longitude"]?>&h1=es;z=14&output=embed" style="width:100%; height: 400px;"></iframe>
    </div>
        <div class="nav_credit">
            <div class="nav">
              <form class="" action="index.html"method="post">
                <label for="from">From:</label>
                <input type="text" name="from"  placeholder="origin" value="">
                <br><br>
                <label for="to">To:</label>
                <input type="text" name="to" placeholder="destination" value="">
                <br><br>
                <label for="from">Time:</label>
                <input type="time" name="from" placeholder="destination" value="">
                <br> <br>
                <button type="button" name="button">Start</button>
              </form>
            </div>
           
            <div class="credits">
                <p>Name: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<?php echo" $name ";?> </p><br>
                <p>credit Points: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo" $credits ";?></p>
            </div>
        </div>
        <div class="maoHere"></div>
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsZrS5LkAXAqzgVYMJQQMYOoWgYCHHZTU&libraries=places&callback=initMap"></script>
        <script>
          function initMap(){
        var myLatLng = {lat:23.8133,lng:86.4419};
        var myOptions ={
            center: myLatLng,
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,

        }
        var map= new google.maps.Map(document.getElementById("mapHere"),myOptions);
         //Direction service
         var directionsService = new google.maps.DirectionsService();

//directionroute
var directionsDisplay = new google.maps.DirectionsRenderer();
          directionsDisplay.setMap(map);
var options= {
        types: ['geocode','establishment']
    }
          var input1 = document.getElementById("from");
    var autocomplete1 = new google.maps.places.Autocomplete(input1,options)
    var input2 = document.getElementById("to");
    var autocomplete2 = new google.maps.places.Autocomplete(input2,options)
  }
        </script>
  </body>
</html>
