<?php

for ($n = 1; $n <= 50; $n ++){
    if ($n % 5 == 0){
        continue;
    }
    echo $n . " ";
}