<?php

    $partite = [
       [
           'squadra1' => 'Olimpia Milano',
           'squadra2' => 'Cantù',
           'puntiSquadra1' => 55,
           'puntiSquadra2' => 60
       ],
       [
            'squadra1' => 'Olimpia Milano Due',
            'squadra2' => 'Cantù Due',
            'puntiSquadra1' => 45,
            'puntiSquadra2' => 50
        ],
        [
            'squadra1' => 'Olimpia Milano Tre',
            'squadra2' => 'Cantù Tre',
            'puntiSquadra1' => 47,
            'puntiSquadra2' => 80
        ],
        [
            'squadra1' => 'Olimpia Milano Quatro',
            'squadra2' => 'Cantù Quatro',
            'puntiSquadra1' => 51,
            'puntiSquadra2' => 45
        ]
        ];

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snacks</title>
 </head>
 <body>
     <pre> 
         <?php for($i = 0; $i < count($partite); $i++){; ?>
            <p>
                <?php echo $partite[$i]['squadra1']; ?> - <?php echo $partite[$i]['squadra2']; ?> | <?php echo $partite[$i]['puntiSquadra1']; ?>-<?php echo $partite[$i]['puntiSquadra2']; ?>
            </p>
         <?php }; ?>
     </pre>
 </body>
 </html>