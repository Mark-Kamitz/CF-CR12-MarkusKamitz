<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php require_once 'components/boot.php'?>
   <title>Web Service</title>
</head>
<body>
   <?php require_once 'components/nav_dark.php'?>
   <div>
      <img src="pictures/airport.jpeg" class="img-fluid shadow" >
   </div>
   <div class="container my-5">
   <?php
   if($_GET['id']) { 
      $id = $_GET['id'];
      require_once "db_check.php";
      if(empty($destinations)) {
         $json_response = response(200, "destinations not found", NULL);
      }
      else {
         $json_response = response(200, "destination found" , $destinations);
      }
   }
   function response($status,$status_message,$n_destinations) {
      $response['status']=$status;
      $response['status_message']=$status_message;
      $response['available']= $destinations;
      $json_response = json_encode($response);
      return $json_response;
   }
   ?>
   </div> 
</body>
</html>




