<?php

setcookie("fruit","apple",time()+(86400));
// print_r($_COOKIE);

if(isset($_COOKIE['fruit'])){
    print_r($_COOKIE);
}
else{
    echo "not set";
}



?>