<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if(strlen($name) > 3 &&  strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)){
    echo "Accesso Riuscito";
}else{
    echo "Accesso negato";
}