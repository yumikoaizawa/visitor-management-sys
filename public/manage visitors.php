<?php
@include 'config.php';
$query = "SELECT * From visitor_form";
$query_run = mysqli_query($conn,$query);

if($query_run){
  while ($row = mysqli_fetch_array($query_run))
  {
   echo $row ['id'];
   echo $row ['name'];
   echo $row ['email'];
   echo $row ['phone'];
  }
}
else{
  echo "No Record Found";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Visitors</title>
  <link rel="stylesheet" href="../dist/output.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
</head>
<div class="container">
<body>
  <?php
  include('aside.php');
  ?>
  <div class="visitorm">
    <h2> Manage Visitors</h2>
    <hr>
   
  </div>
</body>
</div>
</html>
