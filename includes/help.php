<?php

function showData($data){

    if(is_array($data)) {
        foreach($data as $item) {
            echo "<hr>";
            var_dump($item);
        }
    }else {
        var_dump($data);
    }
    die();
}
?>