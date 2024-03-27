<?php

$connect = mysqli_connect('localhost', 'hamburger', 'ham', 'hamburger');
if(mysqli_connect_errno()){
    exit('Failed to connect to MySQL'. mysqli_connect_error());
}