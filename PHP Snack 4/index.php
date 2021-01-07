<?php 

$arrNum = [];


while(count($arrNum) < 15){
    $rand = rand(1,100);
    if(!(in_array($rand, $arrNum))){
      $arrNum[] = $rand;
    }
}


foreach($arrNum as $key => $value){
    echo($value . "<br>");
}

?>