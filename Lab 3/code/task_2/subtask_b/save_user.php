<?php
if (("POST" === $_SERVER['REQUEST_METHOD']) && isset( $_POST['last_name'], $_POST['first_name'], $_POST['age'])) {
    session_start();

    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['age'] = $_POST['age'];
            
    echo "Данные успешно сохранены";
}
