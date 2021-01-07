<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];



echo "<div style = 'border: 2px solid grey; text-align:center; padding: 20px;'>";
    foreach($db["teachers"] as $k => $v){
        echo($v["name"]. " " . $v["lastname"]  ."<br>");

    }
echo "</div>";

echo "<div style = 'border: 2px solid green; text-align:center;  padding: 20px; margin-top: 20px;'>";
    foreach($db["pm"] as $k => $v){
        echo($v["name"]. " " . $v["lastname"]  ."<br>");

    }
echo "</div>";


?>