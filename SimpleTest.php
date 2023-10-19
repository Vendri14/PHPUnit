<?php
    //Menggunakan PHPUnit
    use PHPUnit\Framework\TestCase;

    //membutuhkan wordcount.php
    require_once "wordcount.php";

    class SimpleTest extends Testcase{

        public function testCountWords(){
            // Menggunakan Class yang akan di test / mendeklarasi class

            $WC = new wordcount();

            //Masukkan kata kata 
            $katatesting = "Sevri Vendrian Achmad Jordan"; // 4 kata juga

            //Menghitung kata dari variable katatesting
            $WordCount = $WC -> countWords($katatesting);

            // jika kata == 4, Berarti Benar
            $this ->assertEquals(4, $WordCount);

        }

    }
?>


