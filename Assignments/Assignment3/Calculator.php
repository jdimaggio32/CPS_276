<?php
class Calculator {
 
    public function calc($operator, $num1, $num2) {
    
        $output="";

    //errors - argument count error in index.php

        if ($operator == "/" && $num2 == 0) {
            $output = "Cannot divide by 0" . "<br>";
            return $output; 
        } else if ($operator != "+" || $operator != "/" || $operator != "-" || $operator != "*") {
            $output = "Incorrect operator";
        } 

    //calculations 

        if ($operator == "+") {
            $output = $num1 + $num2;
            return "The sum of the numbers is " . $output . "<br>";
        } else if ($operator == "-") {
            $output = $num1 - $num2;
            return "The difference of the numbers is " . $output . "<br>";
        } else if ($operator == "*") {
            $output = $num1 * $num2;
            return "The product of the numbers is " . $output . "<br>";
        } else if ($operator == "/") {
            $output = $num1 / $num2;
            return "The division of the numbers is " . $output . "<br>";
        }
        
    }
    
}
?>