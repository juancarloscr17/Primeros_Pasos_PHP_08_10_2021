<?php
$nombre = (string) "Juan Carlos Coronel Rodriguez";
    echo $nombre;
    echo "\n<br>\n";

    $edad = (integer) 35;
    echo $edad;
    echo "\n<br>\n";

    $altura = (float) 1.80; 
    echo $altura;
    echo "\n<br>\n";

    $soy_estudiante = (bool) true;
    var_dump($soy_estudiante);
    echo "<br>\n";

    $dirrecion = (array) [
        (string) "Calle",
        (integer) 17,
        "Ciudad" => (string) "Bucaramanga",
        (bool) true
    ];
    print_r($dirrecion);
    echo "\n<br>\n";
    $nacionalidad = (object) [
        "Pais" => "Colombia",
        "Departamento" => "Santander"
    ];
    print_r($nacionalidad);
    echo "\n<br>\n";

    $git = (string) "";
    ?>