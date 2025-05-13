<?php

    function conway($str) {
        return preg_replace_callback('/(.)\1*/',
            function($matches) {
                return strlen($matches[0]).$matches[1];
            }, $str);
    }

    function sequence(int $nbr) {
        $u = "1";
        for ($i = 0;$i <= $nbr; $i++) {
            echo "$u\n";
            $u = conway($u);
     }
}
