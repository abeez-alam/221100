<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" id="enter your name">
        <br/>
        <br/>
        <button name="button" value="set" >set cookies</button>
        <br/>
        <br/>
        <button name="button" value="Display" >Display cookies</button>
        <br/>
        <br/>
        <button name="button" value="Delete" >Delete cookies</button>
    </form>
    <?php
    if(isset($_POST['button'])){
        if($_POST('button')=="set"){
            $val = $_POST['user'];
            setcookie("user",$val);
            echo "cookies is set";
        }
        if($_POST['button']==Display){
            if(isset($_COOKIE['user'])){
                echo $_COOKIE['user'];
            }
        }
        if($_POST['button']==Delete){
            if(isset($_COOKIE['user'])){
                setcookie['user',null,-1];
            }
        }
    }
  
    
    ?>
</body>
</html>