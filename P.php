<?php
    $array = array("a"=>"vishnu",
             "b"=>"Sivan",
             "4"=>"php",
             "c++",
             "java"    );
             
    array_flip($array);
    
    $keys = array_keys($array);
    echo $keys[4];
?>