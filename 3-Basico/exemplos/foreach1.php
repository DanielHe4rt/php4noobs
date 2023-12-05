<?php

$array1 = [
    'dev' => 'danielhe4rt',
    'group' => 'he4rtdevs'
];

$array2 = [
    'danielhe4rt',
    'he4rtdevs'
];

// Array associativo
foreach ($array1 as $key => $value) {
    echo $value . "<br/> \n";
}

// Array não associativo
foreach ($array2 as $value) {
    echo $value . "<br/>\n";
}
