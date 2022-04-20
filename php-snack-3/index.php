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

    $postsValues = array_values($posts);
    $postsKeys = array_keys($posts);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <div>
        <?php for ($i = 0; $i < count($postsKeys); $i++) {?>

            <h2>
                <?php echo $postsKeys[$i]; ?>
            </h2>

            <?php for($x = 0; $x < count($postsValues[$i]); $x++) {; ?>
                <h4>
                    <?php echo $postsValues[$i][$x]['title']; ?>
                </h4>
                <em>
                    <?php echo $postsValues[$i][$x]['author']; ?>
                </em>
                <p>
                    <?php echo $postsValues[$i][$x]['text']; ?>
                </p>
            <?php }; ?>

        <?php } ?>
    </div>
 </body>
 </html>