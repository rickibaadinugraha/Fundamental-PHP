<?php 

    // Looping/Perulangan 
    
    // While perulangan sementara
    $a = 5;

    while ($a <= 10) {
        echo "saya bernilai " . $a . '<br>';
        $a++;
    }

    // Do while jalankan cek kondisi
    $a = 1;

    do {
        echo "saya bernilai " . $a . '<br>';
        $a++;
    } while ($a <= 10);

    // For menjalakan perintahnya dalam satu fungsi
    
    for ($i=0; $i < 10; $i++) { 
        echo "saya bernilai " . $i . '<br>';
    }

    // Foreach looping array 
    // $key = 0,1,2 $value nilai dari $variable
    $buah = ['jeruk', 'alpukat', 'mangga'];

    foreach ($buah as $key => $value) {
        echo $value . '<br>';
    }

?>