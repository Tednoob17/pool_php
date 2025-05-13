<?php
function my_swap(&$a, &$b) {
         $tmp = $a;
         $a = $b;
         $b = $tmp;
}
