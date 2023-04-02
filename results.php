<?php

    define("PI", 3.1416);

    $radius = floatval($_POST["radius-of-sphere"]);

    // calculating the volume of the sphere
    $volume = 4/3 * PI * pow($radius, 3);

    // calculating the surface area of the sphere
    $surfaceArea = 4 * PI * pow($radius, 2);

    echo "<h3>Results:</h3>";
    echo "The volume of the sphere is " . number_format($volume, 2) . "cm<sup>3</sup> and the surface area of the sphere is " . number_format($surfaceArea, 2) . "cm<sup>2</sup>.";
?>
