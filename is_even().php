<?php

function is_even($num){
    if($num % 2 == 0){
        return true;

    }
    else{
        return false;
        
    }
}

if (is_even(20)){
    
    echo "The number you have chosen is even";
}
else{
    
    echo "The number you have chosen is odd";
}
?>