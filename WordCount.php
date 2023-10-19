<?php

class WordCount {
    public function countWords($sentence) {

        //Menggunakan fungsi explode digunakan untuk memecah string menjadi array.
        return count (explode(" ", $sentence));
    }
}
?>