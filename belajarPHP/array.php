<?php 

    //  indexed array key nya angka
    $a = ['BMW', 'HONDA', 'SUZUKI'];

    // associative array key nya custom
    $b = [        
        'isza' => 'mobille apps',
        'ricki' => 'backend dev',
        'firly' => 'fullstack'
    ];

    // multidimensional array
    // untuk memanggil array terletak pada key nya
    $c = [
        'a' => $a,
        'b' => $b
    ];

    $d = [
        'c' => $c,
        'lainya' => [1,2,3,4,100]
    ];

    echo $d['c']['b']['ricki'];



?>