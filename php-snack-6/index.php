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
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <title>Document</title>
 </head>
 <body>
    <main class="container">
        <div class="row text-white text-center">
            <div class="col-6 bg-secondary py-3">
                <?php for($i = 0; $i < count($db['teachers']); $i++) {;?>
                    <p>
                        <?php echo $db['teachers'][$i]['name'] . ' ' . $db['teachers'][$i]['lastname']; ?>
                    </p>
                <?php }; ?>
            </div>

            <div class="col-6 bg-success py-3">
                <?php for($i = 0; $i < count($db['pm']); $i++) {; ?>
                    <p>
                        <?php echo $db['pm'][$i]['name'] . ' ' . $db['pm'][$i]['lastname']; ?>
                    </p>
                <?php }; ?>
            </div>
        </div>
    </main>
 </body>
 </html>