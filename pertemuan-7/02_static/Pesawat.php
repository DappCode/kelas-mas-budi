<?php

    class Pesawat {

        // Property static
        private static $harga = 1000;

        // Method Static
        public static function type() 
        {
            return 'Sukhoi';
        }

        public static function getHarga() 
        {
            return self::$harga;  //--> untuk memanggil yang static
        }

        public function typeNoStatic()
        {
            return 'typeNoStatic';
        }

    }