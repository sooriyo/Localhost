<!DOCTYPE html>
<html lang="">
<head>
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--  CSS -->
    <style>
        body {
            background-color: #f2f2f2;
        }
        .container {
            margin-top: 100px;
            border: 1px solid #ccc;
            padding: 200px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">

    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <br><br> <h7>Enter "admin" as username and password</h7>
    </form>
</div>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
