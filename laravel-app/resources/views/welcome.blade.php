<?php
    echo"<h1> Mi primer pagina Web en Laravel </h1>";
    $x = 'Hola Mundo';
// $y = ['Hola', 'Mundo', 'Laravel'];
    $y = array('Hola', 'Mundo', 'Laravel');
    $z = ["marca" => "toyota", "modelo" => "corolla", ];
    echo "<p>$x</p>";
    echo "<p>$y[0] $y[1] $y[2]</p>";
    echo $y[0] . " " . $y[1] . " " . $y[2];
    echo "<ul>";
        foreach ($y as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
?>