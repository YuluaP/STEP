<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PSWD = '';
$DB_NAME = '1test';

//Подключение
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PSWD, $DB_NAME);

if ($mysqli->connect_errno) {
    echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
  exit;
}

//Создание базы данных
//$mysqli->query("CREATE DATABASE `1test1`");

//Создание таблицы
/*if ($mysqli->query("CREATE TABLE `users`(
      `id` INT NOT NULL AUTO_INCREMENT ,
      `name` VARCHAR(20) NOT NULL ,
      `login` VARCHAR(30) NOT NULL ,
      `pswd` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`login`)
    ) ENGINE = InnoDB;") === TRUE) {
    echo "Таблица users успешно создана.\n";
}*/

//Внесение данных в таблицу
/*if ($mysqli->query("INSERT INTO `users`(`name`, `login`, `pswd`)
                    VALUES ('Sun', 'Sun', 'Sun123')
    ") === TRUE) {
    echo "Данные успешно внесены.\n";
}*/

//Чтение данных из таблицы (выдает "Array")
/*$res = $mysqli->query("SELECT (`name`)
                FROM `users` WHERE 1");
$red = $res->fetch_all();
echo $red;*/

//Изменение данных в таблице
/*if ($mysqli->query("UPDATE `users` SET `name`= 'Sun2' WHERE 1
    ") === TRUE) {
    echo "Данные успешно изменены.\n";
}*/

//Удаление данных в таблице
/*if ($mysqli->query("DELETE FROM `users` WHERE 1
    ") === TRUE) {
    echo "Данные успешно удалены.\n";
}*/



?>
