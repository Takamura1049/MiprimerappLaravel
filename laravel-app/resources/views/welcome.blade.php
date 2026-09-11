<?php
    echo"<h1> Mi primer pagina Web en Laravel </h1>";
    $x = 'Hola Mundo';
    //$y = ['Hola', 'Mundo', 'Laravel'];
    $y = array('Hola', 'Mundo', 'Laravel');
    $z = (object)["marca" => "Toyota", "modelo" => "Corolla", "color" => "Rojo"];
    var_dump($z);
    var_dump($y);
    echo "<br>";
    echo "<p>$x</p>";
    echo "<p>$y[0] $y[1] $y[2]</p>";
    echo $y[0] . " " . $y[1] . " " . $y[2];
    echo "<br>";
    echo $z->marca . " " . $z->modelo . " " . $z->color;
    echo "<ul>";
        foreach ($y as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
    echo "<p> La suma de 5 + 10 es :". sumar(5, 10) . "</p>";
    function sumar($n1, $n2){
        return $n1 + $n2;
            }
?>