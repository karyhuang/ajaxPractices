<?php

// connect to a database
$conn = mysqli_connect('localhost', 'kary', 'kary1234', 'ajaxtest');

echo 'Processing...';

// check for POST variable
if (isset($_POST['fname'])) {
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  // echo 'POST: Your name is '. $_POST['fname'];

  $query = "INSERT INTO users(name) VALUES('$fname')";
  if (mysqli_query($conn, $query)) {
    echo 'User Added...';
  }
  else {
    echo 'ERROR: '. mysqli_error($conn);
  }
}

// check for GET variable
if (isset($_GET['fname'])) {
  echo 'GET: Your name is '. $_GET['fname'];
}
