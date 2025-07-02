<?php

if(empty($_POST["username"])){
    die("Name is required");
}

print_r($_POST);
