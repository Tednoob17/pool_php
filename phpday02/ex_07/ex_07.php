<?php

    function my_division_modulo($firstNumber, $operChar, $secondNumber) {
        if ($secondNumber == 0) {
            throw new Exception("The given arguments aren't good.\n");
        } 
        switch ($operChar) {

        case '/':
            return($firstNumber / $secondNumber);
            break;
        case '%':
            return($firstNumber % $secondNumber);
            break;
        default :
            throw new Exception("The given arguments aren't good.\n");
        }

 }
