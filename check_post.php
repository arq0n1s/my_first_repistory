<?php


    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    if(trim($_POST['username']) == '')
        echo"Вы не ввели имя пользователя. Введите его немедленно !";
    else if(strlen(trim($_POST['useremail'])<=1)) 
        echo"Введеште нумеле кум требу ш ну-те выеби, бэй !"; 
    else if((trim($_POST['useremail'])=='') || (trim($_POST['userpassword'])== ''))
        echo"Введите данные (email и/или пароль)";
    else{
        /*$_POST['userpassword'] = md5($password);
        foreach($_POST as $value){
            echo"$value<br>";
        }*/
        header("Location: about.php");
        exit;
    }