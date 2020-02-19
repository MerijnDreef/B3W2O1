<?php
    session_start();
    
    $continue = true;
    foreach(array_keys($_POST) as $tempPost) {
        if(strlen($_POST[$tempPost]) == 0){
            $continue = false;
            echo $_POST[$tempPost];
        } else {
            $_SESSION[$tempPost] = $_POST[$tempPost];
        }
    }
    if($continue == false) {
        zendTerug("/B3W2O1/index.html");
    } else {
        zendTerug("/B3W2O1/antwoord.php");
    }
    function zendTerug($path){
        header("location: ".$path);
    }
?>