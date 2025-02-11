<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input name="username" type="text">
        <input type="submit" value="Send">
    </form>
    <h1><?php 
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            echo $username;
        }
    ?></h1>
</body>
</html>