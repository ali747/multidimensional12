<?php
// Multidimensional array
$superheroes = array(
    "spider-man" => array(
        "name" => "Ali Raza",
        "email" => "razaafzal748@mail.com",
    ),
    "super-man" => array(
        "name" => "Saad",
        "email" => "Saad743@gmail.com",
    ),
    "iron-man" => array(
        "name" => "Hamza",
        "email" => "hamza@mail.com",
    )
);
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " :\n " . $value . "\n". "<br>";
    }
    echo "<br>";
}
?>