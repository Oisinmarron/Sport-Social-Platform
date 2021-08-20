<?php

    session_start();

    $logout = "";

    if (array_key_exists("id", $_COOKIE)){

        $_SESSION['id'] = $_COOKIE['id']; 

    }

    if(array_key_exists("id", $_SESSION)){

        $logout = "<a href='index.php?logout=1' class='btn btn-outline-success'>Log out</a>";

    }else{
        header("Location: index.php");
    }

?>