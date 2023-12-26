<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SwiftVisit Dashboard</title>
  <link rel="stylesheet" href="../dist/output.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
</head>
<body>
  <div class="container">
  <?php
  include('aside.php');
  ?>
<main>
<div class="date">
        <input type="date">
        </div>
      <div class="insight">
      <div class="today-visitors">
      <span class="material-icons-sharp">today</span>
      <div class="middle">
        <div class="center">
          <h3>Today Visitors</h3>
        </div>
      </div>
      </div>
    <div class="new-visitors">
      <span class="material-icons-sharp">schedule</span>
      <div class="middle">
        <div class="center">
          <h3>New  Visitors</h3>
        </div>
      </div>
      </div>
<div class="total-visitors">
      <span class="material-icons-sharp">analytics</span>
      <div class="middle">
        <div class="center">
          <h3>Total  Visitors</h3>
        </div>
      </div>
      </div>
   </div>
</main>
  </div>
</body>
</html>
