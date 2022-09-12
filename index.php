<?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        echo "yes";
        echo "<br>";
        print_r($_POST);
        $email=$_POST['email'];
        echo "<br>";
        echo "Inputted email is: ".$email;
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label for="email" class="email">Email:</label>
        <input type="email" name="email">
        <br><br>
        <label for="password" class="password">Password:</label>
        <input type="password" name="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>