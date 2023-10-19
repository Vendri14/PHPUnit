<?php 
    // File : Wordcount.php

class wordcount{

    public function countWords($kata){
        
        return count(explode(" ",$kata));
    }
}
?>