<?php

function is_empty(string $username, string $password, string $rpassword){
    if (empty($username) || empty($password || empty($rpassword))){
        return true;
    }else {
        return false;
    }
}

function email_exists(object $pdo, string $email){
    if (get_username($pdo, $username)){
        return true;
    }else {
        return false;
    }
}

function create_user(object $pdo, string $email, string $password){
    insert_user(object $pdo, string $email, string $password);
}