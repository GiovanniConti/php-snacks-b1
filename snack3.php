<?php

$numbers = [];

while( count($numbers) < 15){
  $numberToAdd = rand($min=0, $max=100);

  if(!in_array($numberToAdd, $numbers)){
    array_push($numbers, $numberToAdd);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
  <main>
    <h1>Random numbers array</h1>

    <ol>
      <?php 
        for ($i=0; $i < count($numbers) ; $i++) { 
          
      ?>
          <li> <?php echo $numbers[$i] ?> </li>
        
        <?php
        }
        ?>
      
    </ol>
  </main>
</body>
</html>