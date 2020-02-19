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
        foreach($_SESSION as $tempSessionVar) {
            echo $tempSessionVar;
        }
    } else {
        zendTerug("/B3W2O1/overkunde.php");
    }
    function zendTerug($path){
        header("location: ".$path);
    }
?>