<?php
    function my_create_map(...$array) {
    	     $result = [];
    	     foreach ($array as $arr) {
	     	     if (count($arr) < 2 ) {
		     	echo "The given arguments aren't valid.";
                return (NULL);
		     }
		     else {
		     	  for ($i = 0; $i < count($arr); $i++) {
			      $result = array_merge($result,  array($arr[0]  =>   $arr[1]));
			  }
		     }
	     }
	     return $result;
    }
