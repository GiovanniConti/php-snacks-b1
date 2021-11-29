<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$arrayKeys = array_keys($posts);
var_dump($arrayKeys);
var_dump(array_keys($posts)[1]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  <main>
    
    <?php

    for ($i=0; $i < count(array_keys($posts)) ; $i++) { 
      
      $currentArrayKey = array_keys($posts)[$i];

    ?>

    <!-- Print the selected key name -->
    <h2> <?php echo$currentArrayKey; ?> </h2>
    
    <ul>
      
      <?php
        for ($j=0; $j < count($posts[$currentArrayKey]) ; $j++) { 
          $currentPost = $posts[$currentArrayKey][$j];

      ?>
        <li>
          <div class="postContainer">
            <h4>Title: <?php echo $currentPost['title'] ?> </h4>
            <p>Text: <?php echo $currentPost['text'] ?> </p>
            <h5>Author: <?php echo $currentPost['author'] ?> </h5>
          </div>
        </li>

      <?php
        }
      ?>

    </ul>

    <?php
    }
    ?>

  </main>
</body>
</html>