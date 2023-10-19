<?php
//Path to run ./vendor/bin.PHPUNIT --bootstrap vendor/autoload.php FileName.php
//Butuh Framework PHPUNIT

use PHPUnit\Framework\TestCase;

//Class yang akan di TEST.
require_once "Wordcount.php";

//Class yang digunakan untuk run Testing
class SimpleTest extends TestCase {
    public function testCountWords () {

        //Gunakan class yang akan di Test.
        $Wc = new WordCount();

        //Masukan parameter 4 kata, nantinya output ini harus 4.
        $TestSentence = "My Name Is Rafika";
        $WordCount = $Wc ->countWords($TestSentence);

        //Kita assert equal, ekspetasi nya harus 4. Jika benar berarti WordCount berfungsi dengan baik.
        //assertEquals berfungsi untuk menguji apakah sebuah tes berhasil atau gagal.
        $this -> assertEquals(4, $WordCount);
    }
}
?>