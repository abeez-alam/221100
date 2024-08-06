<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter user name">
        <br>
        <br><br>
        <button name="button" value="set">set session</button>
        <br><br><br>
        <button name="button" value="get">Get session</button>
        <br><br><br>
        <button name="button" value="delete">Delete session</button>
    </form>
    <?php
    session_start();
    if(isset($_POST['button'])){
        if($_POST['button'] == "set"){
            $var = $_POST['user'];
            $_SESSION['user']= $var;
        }
        if($_POST['button'] == "get"){
            echo $_SESSION['user'];
        }
        if($_POST['button'] == "delete"){
           
            session_destroy();
        }
    }
    
    
    
    ?>
    
</body>
</html>