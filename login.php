<?php
// Establishing connection to MySQL database
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "project_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Get user information from database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // If user is found, redirect to home page
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: home.php');
    } else {
        // error message pop-up box
        echo "<script>
          alert('Incorrect email or password. Please try again.');
          window.location.href='index.php';
        </script>";
    }

// Closing MySQL connection
    $conn->close();
}