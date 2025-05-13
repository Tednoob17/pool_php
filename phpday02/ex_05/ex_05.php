<?php
     function my_add_elem_map($key, $value, &$map) {
         $map[$key] = $value;
         return $map;
    }

    function my_modify_elem_map($key, $value, $map) {
        $map[$key] = $value;
        return $map;
    }

    function my_delete_elem_map($key, &$map) {
        unset ($map[$key]);
        return $map;
    }

    function my_is_elem_valid($key, $value, &$map) {
        if ((array_key_exists($key, $map) && $map[$key] === $value))
            return true;
        else
            echo "You have to give good parameters.\n";
            return false;
    }
