<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color:white;
            background-image: url('image2.jpg'); 
            background-size: cover;
        }
        .login-container {
            width: 300px;
            margin: 100px auto;
            color:yellow;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            color:yellow;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .bookstore-image {
            text-align: center;
        }
        .bookstore-image img {
            width: 200px; 
            height: auto;
    </style>
</head>
<body bgcolor="pink">
<h1>BOOK STORE LOGIN SYSTEM<h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['username'];
    $pass = $_POST['password'];
    
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "sari";

 
  $con = mysqli_connect($servername, $username, $password, $database);

  if (!$con) {
      die("Sorry, we failed to connect: " . mysqli_connect_error());
  } else {
      echo "connection was successful";
  }

 
  $sql = "INSERT INTO book(username,password,dt) VALUES ('$fname', '$pass', current_timestamp());";

  
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "<br>Data stored successfully";

  } else {
    echo "<br>Data not stored successfully";
  }
}
?>
    <div class="login-container">
        <h2>Login</h2>
        <form action="logout.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <a href="available_books.html">NEXT</a>
        </form>
    </div>
</body>
</html>