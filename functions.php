<?php

function secure() {
    if(!isset($_SESSION["id"])) {
        set_message("Please login first to view this pasge");
        header("Location: /hamburger");
        die();
    }
}

function set_message($message) {
    {
        $_SESSION["message"] = $message;
    }
}
