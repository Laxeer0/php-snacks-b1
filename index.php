<?php
$matches = [
    1 =>[
        "first_squad" => "Olimpia Milano",
        "second_squad" => "Cantù",
        "first_points" => 55,
        "second_points" => 60,
    ],
    2 =>[
        "first_squad" => "New Basket Agropoli",
        "second_squad" => "Viola Reggio Calabria",
        "first_points" => 91,
        "second_points" => 78,
    ]
    ];



for( $i = 0; $i < count($matches); $i++ ){

    $match_key = array_keys($matches);
    $currentMatch = $match_key[$i];
    echo $currentMatch ." Match: ". $matches[$currentMatch]["first_squad"] . " - " . $matches[$currentMatch]["second_squad"] . " | " . $matches[$currentMatch]["first_points"] . "-" . $matches[$currentMatch]["second_points"] . "<br>";

}


?>