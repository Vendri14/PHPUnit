<?php 
    // File : Wordcount.php

class wordcount{

    //membuat fungsi untuk menampung kata
    public function countWords($kata){
        //memecah kata menggunakan exploda agar bisa dihiung
        return count(explode(" ",$kata));
    }
}
?>