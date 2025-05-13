<?php
    function  my_get_args(...$var) {
             $var_ds = [];
             for($i = 0; $i < count($var); $i++)
                    $var_ds[$i] =  $var[$i];
             return $var;
    }
