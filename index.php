<?php

    //Example
    for ($x = 2000; $x <= intval(date("Y")); $x++) {
        if($x == 2000){
            echo "<b>Millennium:</b> $x <br>";
        }else if($x == intval(date("Y"))){
            echo "<b>Now:</b> $x <br>";
        }else{
            echo "Year: $x <br>";
        }
    }

    //We'd love to see your "For" loop. Add, let's publish

?>