<?php
// Function to print the first n Fibonacci numbers
function printFibonacci($n) {
    $fibonacciSeries = array();
    
    for ($i = 0; $i < $n; $i++) {
        if ($i <= 1) {
            $fibonacciSeries[] = $i;
        } else {
            $fibonacciSeries[] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        }
    }
    
    // Print the Fibonacci numbers
    foreach ($fibonacciSeries as $number) {
        echo $number . " ";
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
?>
