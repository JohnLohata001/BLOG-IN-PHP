<?php

function validationuser($user){
    $errors = array();
    if(empty($user['username'])){
        array_push($errors, 'username is required');
    }
    if(empty($user['email'])){
        array_push($errors, 'email is required');
    }
    if(empty($user['password'])){
        array_push($errors, 'password is required');
    }
  
    if($user['passwordConf'] !== $user['password']){
        array_push($errors, 'password do not much');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if ($existingUser) {
    //     array_push($errors, 'Email already exists');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email is already exist');
        }
        if (isset($user['create-admin'])) {
            array_push($errors, 'Email is already exist'); 
        }
    }
    

    return $errors;

}

function validationLogin($user){
    $errors = array();
    if(empty($user['username'])){
        array_push($errors, 'username is required');
    }
  
    if(empty($user['password'])){
        array_push($errors, 'password is required');
    }

    return $errors;

}