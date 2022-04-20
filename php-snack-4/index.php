<?php
    $numbers = [];
    
    
    while(count($numbers) < 15){
        $randomNumber = rand(1, 100);

        if(!in_array($randomNumber, $numbers)){
            $numbers[] = $randomNumber;
        };
    }

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
    <ul>
        <?php for($i = 0; $i < count($numbers); $i++) {; ?>
            <li>
            <?php echo $numbers[$i]; ?>
            </li>
        <?php }; ?>
    </ul>
 </body>
 </html>