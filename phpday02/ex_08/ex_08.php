<?php
   function my_order_class_name(...$obj) {
       $arranged = [];
       foreach($obj as $value) {
           $the_type = gettypper($value);
           $size = strlen($the_type);
           if (!isset($arranged[$size]))
               $arranged[$size] = [];
           if (array_search($the_type, $arranged[$size]) === false)
               $arranged[$size][] = $the_type;
   }
       ksort($arranged);
       foreach ($arranged as $key => $value) {
           natcasesort($arranged[$key]);
       }
       return array_values($arranged);
  }

   function gettypper($valuable) {
      $the_type = gettype($valuable);
      if ($the_type === 'object')
          return get_class($valuable);
      else
          return $the_type;
}
