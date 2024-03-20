<?php
if (("POST" === $_SERVER['REQUEST_METHOD']) && isset( $_POST['name'], $_POST['fname'], $_POST['age'], $_POST['salary'])) {
    session_start();

    $user_data = [
        'Имя'=> $_POST['name'],
        'Фамилия' => $_POST['fname'],
        'Возраст' => $_POST['age'],
        'З.П.'=> $_POST['salary'],
    ];

    $_SESSION['user_data'] = $user_data;
            
    echo "Данные успешно сохранены";
}