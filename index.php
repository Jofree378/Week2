<?php

require 'src/functions.php';
// Объявляем массив имен для пользователей
$names = ['John', 'Mike', 'Dima', 'Anna', 'Leroy'];

// Создаем массив пользователей
$users = (task1_1($names, 50, 18, 45));

// Преобразовываем массив в json
$jsonText = task1_2($users, true);
echo $jsonText;
echo '<br>';

// Преобразовываем массив из формата json
task1_3('users.json');

// Создаем массив с количеством пользователей с одинаковыми именами
$countUsers = task1_4($names, $users);
echo '<pre>';
print_r($countUsers);
echo '</pre>';

// Выводим средний возраст пользователей
echo task1_5($users);

