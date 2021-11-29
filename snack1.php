<?php

$inputName = $_GET["name"];
$inputMail = $_GET["mail"];
$inputAge = $_GET["age"];

$acceptedName = false;
$acceptedAge = false;
$acceptedMail = false;

if(strlen($inputName) > 3){
  $acceptedName = true;
}
if(is_numeric($inputAge)){
  $acceptedAge = true;
}



$hasAt = strchr($inputMail, "@");
// var_dump($hasAt)
$emailSplit = explode('@', $inputMail);
$hasDot = strchr($emailSplit[1], '.');
// var_dump($hasDot);

if($hasAt && $hasDot){
  $acceptedMail = true;
}

if($acceptedName && $acceptedAge && $acceptedMail){
  exit('Accesso riuscito');
} else {
  exit('Accesso negato');
}

?>