<?php 
    $bil = $_POST["bil"];

    include "index.php";
    echo "==== BILANGAN GANJIL 1 - $bil ==== <br>";
    for($i=1; $i<=$bil; $i++){
        if($i%2 == 1){
            echo "$i ";
        }
    }
?>