<?php

if(isset($_POST) && !empty($_POST)){
   
    $username = $_POST['contact_txt_username'];
    $password = $_POST['contact_pass_word'];
    
    if ($username == 'admin' && $password == 'admin'){
        header("Location: ../index.php");
        exit ;
    }else{
        header("Location: ../404.html");
        exit;
    }
}