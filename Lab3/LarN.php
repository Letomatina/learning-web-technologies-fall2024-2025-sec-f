<?php

    $num1=5;
    $num2=15;
    $num3=200;

    Print('Numbers are: '. $num1.' ' . $num2.' '. $num3.'<br>' );

    if($num1>=$num2 && $num1>=$num3){
        print('The largest number is ' . $num1);
    }

    
    else if($num2>=$num1 && $num2>=$num3){
        print('The largest number is ' .$num2);

    }

    else{
        print('The largest number is ' .$num3);
    }

   
?>

  
