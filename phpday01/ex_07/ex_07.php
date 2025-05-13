<?php

function get_angry_dog(int $nbr) {
         $concat_var = "";
         for ($num = 0; $num < $nbr; $num++) {
             $concat_var .= "woof";
         }
         $concat_var .="\n";
         return $concat_var;
}