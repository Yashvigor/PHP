<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="username" placeholder="Enter your name"/> <br>
        <input type="password" name="password" placeholder="Enter your password"/> <br>
        <input type="submit" name="submitbtn">
    </form>

    <?php
    if (isset($_POST["submitbtn"])) {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            echo "The name of the user is $username";
            echo "<br> The password of the user is $password";
        }
    }
    ?>
    
</body>
</html>
