<?php
 function my_print_args(...$var) {
    for ($i = 0; $i < count($var); $i++) {
         if (is_array($var[$i])) {
            dump_array($var[$i]);
          }
          else
            echo "$var[$i]\n";
        }
}

 function dump_array(...$var) {
    foreach ($var as $element) {
            if (is_array($element)) {
               dump_array($element);
            }
            else
                echo "$element\n";
    }
 }

