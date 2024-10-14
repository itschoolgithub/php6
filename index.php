<?php
    $a = [
        8488, 399394, 49499,
        "year" => 1994,
        "hello" => "Hello World",
        39 => 333,
        "temp" => 38.3,
        "isAdmin" => true,
        "e" => null,
        "table" => [
            1, 2, 3, "a" => "A"
        ]
    ];

    $b = [
        "red" => "Красный",
        "year" => 2024,
    ];

    $a = $a + $b;

    $a["name"] = "John";
    $a[] = 99;

    // echo $a["table"]["a"];

    echo "<pre>";
    print_r($a);
    // print_r([1, 2, 3] + ['a', 'b', 'c', 'd']);
    // var_dump($a);
    echo "</pre>";

    