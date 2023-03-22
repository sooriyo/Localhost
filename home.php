<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}

$username = $_SESSION['username'];
echo "";

?>

<!DOCTYPE html>
<html lang="">
<head>
    <title>Home</title>
    <h1 style="text-align:center">ayubowan hutto</h1>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/

