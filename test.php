<?php
    session_start();
    if(isset($_SESSION['logged']) && ($_SESSION['logged']==true))
    {
        header("Location: logged.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
</head>
<body>
    <div class="container">
        <form action="login.php"method="post">
            Login:</br>
            <input type="text" name="login" autocomplete="off" required/><br/>
            Password:<br/>
            <input type="password" name="pass" autocomplete="off" required/><br/>
            <input type="submit" value="Log in"/>
        </form>
        <?php
            if(isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
            }
        ?>
    </div>
</body>
</html>
