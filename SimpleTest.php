<?php
    //Menggunakan PHPUnit
    use PHPUnit\Framework\TestCase;

    require_once "wordcount.php";

    class SimpleTest extends Testcase{

        public function testCountWords(){
            // Menggunakan Class yang akan di test

            $WC = new wordcount();

            //Masukkan kata kata 
            $katatesting = "Sevri Vendrian Achmad Jordan"; // 4 kata juga

            $WordCount = $WC -> countWords($katatesting);

            // jika kata == 4, Berarti Benar
            $this ->assertEquals(4, $WordCount);

        }

    }
?>


