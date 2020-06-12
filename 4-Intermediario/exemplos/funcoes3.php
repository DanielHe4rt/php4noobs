<?php

$numerosPares = array_filter([1, 2, 3, 4], function ($numero) {
    return $numero % 2 == 0;
});

print_r($numerosPares);
