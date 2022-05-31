<?php 

    
    function Hello()
    {
        echo "Hello World <br>";
    }

    Hello();

    function motor($supermoto)
    {
        echo "motor saya " . $supermoto . '<br>';
    }

    motor('dtracker');

    function sum($a, $b)
    {
        $total = $a + $b;
        echo $total;
    }

    sum(7, 9);


?>