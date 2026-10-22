<?php 

function createPage($nmFic,$html){
    $fic = fopen($nmFic, "w");
    fputs($fic, $html);
    fclose($fic);

}

?>