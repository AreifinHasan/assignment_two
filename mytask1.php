<?php

//looping with increment using a Function
// using function to print even number using a for loop
function printEvenNumbersFor($start, $end, $step){
    for ($n = $start; $n <= $end; $n += $step){
        echo $n  .  " ";
    }
    echo "<br>";
}
echo "using for loop:";
printEvenNumbersFor(1,20,2);

// using function to print even number using a while loop
function printEvenNumbersWhile($start, $end, $step){
    $n = $start;
    while ($n <= $end){
        echo $n . " ";
        $n += $step;
    }
    echo "<br>";
}
echo "using while loop:";
printEvenNumbersWhile(1,20,2);



// using function to print even number using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step){
    $n = $start;
    do {
        echo $n . " ";
        $n += $step;
    } while ($n <= $end);
    echo "<br>";
}
echo "using do-while loop:";
printEvenNumbersDoWhile(1,20,2);
