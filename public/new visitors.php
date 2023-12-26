<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $meeting = mysqli_real_escape_string($conn, $_POST['meeting']);
    $purpose = mysqli_real_escape_string($conn, $_POST['purpose']);

    $selectVisitor = "SELECT * FROM visitor_table WHERE email='$email'";
    $resultVisitor = mysqli_query($conn, $selectVisitor);

    if (mysqli_num_rows($resultVisitor) > 0) {
        $error[] = 'Visitor with this email already exists!';
    } else {
        $insertVisitor = "INSERT INTO visitor_table (datetime, name, email, contact, address, meeting, purpose) VALUES ('$datetime', '$name', '$email', '$contact', '$address', '$meeting', '$purpose')";
        
        if (mysqli_query($conn, $insertVisitor)) {
            // Success: Redirect or display a success message
            header('location: success.php');
        } else {
            // Error in inserting record
            $error[] = 'Error inserting visitor record: ' . mysqli_error($conn);
        }
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Visitors</title>
  <link rel="stylesheet" href="../dist/output.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
</head>
<div class="container">
<body>
  <?php
  include('aside.php');
  ?>
  <div class="nvisitor">
  <form action="" method="post">
    <div class="form-container">
    <h2>New Visitors Log</h2>
    <input type= "datetime-local">
    <input type="text" name="name" required placeholder="Enter visitor's name">
    <input type="email" name="email" required placeholder="Enter visitor's email">
    <input type="phone" name="phone" required placeholder="Enter visitor's phone">
    <input type="address" name="address" required placeholder="Enter visitor's address">
    <input type="meeting" name="meeting" required placeholder="Meeting with">
    <input type="purpose" name="purpose" required placeholder="Enter visitor's purpose">
    <select name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
</select>
    <input type="submit" name="submit" value="submit" class="form-btn">
  </div>
</form>
  </div>
</body>
</html>
