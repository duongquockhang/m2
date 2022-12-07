<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<?php
   for($i = 2; $i < 100; $i++){
        //  echo $i;
      $mm = 0;
      for($j = 2; $j < sqrt($i); $j++) {
        //only not prime numbers
                //   echo $i . '<br>';
                
                if ($i % $j == 0) {
             
                  $mm++;
                //   echo $mm. '<br>';  
                //   echo $i. '<br>';  
                  break;
                    
                }
      }
      
      if ($mm == 0) {
                // echo"$i is prime number<br/>";   
      }
    }

    // $count = 0;
    // $number = 2; 
    // while ($count <100){
    //     $mm  = 0;
    //     for($j =2 ; $j<= $number; $j++) {
    //         if($number % $j == 0) {
    //             $mm++;
    //         }
    //     }
    //     if($mm == 1 ) {
    //         echo"$number  is prime number<br/>";
    //         $count++;
    //     }
    //     $number++;
    // }
  ?>
</body>

</html>