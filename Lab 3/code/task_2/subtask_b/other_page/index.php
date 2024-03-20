<?php
session_start();
if (isset($_SESSION['last_name'], $_SESSION['first_name'], $_SESSION['age'])) {
    $last_name = $_SESSION['last_name'];
    $first_name = $_SESSION['first_name'];
    $age = $_SESSION['age'];

    echo "Фамилия - $last_name<br>";
    echo "Имя- $first_name<br>";
    echo "Возраст - $age<br>";
}

