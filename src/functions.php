<?php
function task1_1(array $names, int $countUsers = 50, int $ageMin = 18, int $ageMax = 45, bool $echo = false)
{
    for ($i = 0; $i < $countUsers; $i++) {
        $users[] = ['id' => $i, 'name' => $names[array_rand($names)], 'age' => rand($ageMin, $ageMax)];
    }
    if ($echo){
        echo '<pre>';
        print_r($users);
        echo '</pre>';
    }
    return $users;
}
function task1_2(array $users, bool $call = false)
{
    $jsonText = json_encode($users);
    file_put_contents('users.json', $jsonText);
    if ($call){
        return $jsonText;
    }
}
function task1_3($filename)
{
    return json_decode(file_get_contents($filename), true);
}
function task1_4(array $names, array $users) : array
{
    foreach ($names as $name) {
        $count = 0;
        for ($i = 0; $i < sizeof($users); $i++){
            if ($users[$i]['name'] == $name){
                $count++;
            }
        }
        $countless[] = $count . ' раз';
    }
    return array_combine($names, $countless);
}
function task1_5($users)
{
    for ($i = 0; $i < sizeof($users); $i++){
        $sumAge += $users[$i]['age'];
    }
    $result = $sumAge/count($users);
    return 'Средний возраст пользователей: ' . (int)$result;
}