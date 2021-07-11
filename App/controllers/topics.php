<?php

include(ROOT_PATH . "/App/database/db.php"); 
include(ROOT_PATH . "/App/helpers/middleware.php");  
include(ROOT_PATH . "/App/helpers/validateTopic.php"); 

$table = 'topics';

$errors = array();
$id ='';
$name ='';
$description ='';


$topics = selectAll($table);


if (isset($_POST['add-topic'])) {
    adminOnly();
    $errors = validationTopic($_POST);

    if (count($errors) === 0) {       
        
        unset($_POST['add-topic']);        
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic created successfully';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . '/admin/topics/index.php');
        exit();

    }else{
       
        $name = $_POST['name'];
        $description =  $_POST['description'];
    }

}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $topic = selectOne($table, ['id'=> $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];

}

if (isset($_GET['del_id'])) {
    adminOnly();
   $id = $_GET['del_id'];
   $count = delete($table, $id);
   $_SESSION['message'] = 'Topic delete successfully';
   $_SESSION['type'] = 'success';
   header('location:' . BASE_URL . '/admin/topics/index.php');
   exit();

}



if (isset($_POST['update-topic'])) {
    $errors = validationTopic($_POST);
    adminOnly();
    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']); 
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Topic updated successfully';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . '/admin/topics/index.php');
        exit();

    }else{        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description =  $_POST['description'];
    }   
  

}

