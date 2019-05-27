<?php

  $host = 'localhost';  // Хост, у нас все локально
  $user = 'Admin';    // Имя созданного вами пользователя
  $pass = '1234'; // Установленный вами пароль пользователю
  $db_name = 'tovari';   // Имя базы данных
  $db = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
mysqli_set_charset($db, 'utf8');

  // Ругаемся, если соединение установить не удалось
  if (!$db) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }

?>