<?php 
    $connect = mysqli_connect('localhost', 'root', '', 'registration');
    if(!$connect){
        die('Ошибка подключения к БД');
    }