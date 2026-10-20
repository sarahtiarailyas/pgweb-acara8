<?php
    $i = 1; // Initialize counter
    while ($i < 100) { // Chech condition
    echo $i. "<br>"; // Execute code
    $i = $i + 1;
    }
    

    for ($i=1; $i<100; $i++){
        echo $i. "<br>";
    }

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
}

    for($i=0; $i<=3; $i++){
        echo $colors [$i];
    }
?>