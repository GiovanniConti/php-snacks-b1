<?php

$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis rerum atque fugiat earum mollitia fuga corporis aliquam, hic architecto dolorum ipsa culpa. Incidunt nostrum omnis odit facilis iure nesciunt consectetur?
              Sint voluptates quas neque magnam distinctio minus, velit culpa atque repellendus molestiae sequi iste quidem molestias. Doloremque facilis placeat nemo consequatur, accusantium architecto ratione corporis obcaecati, laboriosam nesciunt, animi molestiae.
              Ea perspiciatis libero at, molestias sunt nemo. Quis officia neque laboriosam, corporis provident quas aliquam voluptates ratione animi perferendis maxime ut, nobis doloribus non aperiam dicta delectus odit earum quod.
              Laborum odio iure quis quia libero facere dolor adipisci corporis. Iure odio similique dolorem iusto provident quia, neque labore aliquam exercitationem natus animi, deserunt aperiam voluptatem corrupti repellendus necessitatibus consequatur!
              Ipsa ipsam minus, cum inventore neque ea dolores quasi suscipit veniam, et dignissimos sapiente. Fugiat voluptate eius mollitia, rem architecto magnam ducimus alias non exercitationem blanditiis aperiam, voluptatibus vel esse.';

$splitedParagraphList = explode('.', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4 (bonus)</title>
</head>
<body>
  <main>
    <p> <strong>Given paragraph:</strong> <?php echo $paragraph ?> </p>

    <h3>Same paragraph splited at every dot.</h3>

    <?php
    
    for ($i=0; $i < count($splitedParagraphList) ; $i++) { 
      $splitedParagraph = $splitedParagraphList[$i];

    ?>

      <p> <?php echo $splitedParagraph ?> </p>

    <?php
    }
    ?>
    
  </main>
</body>
</html>