<?php 

    abstract class Smartphone {

        abstract public function ram();      
        
        abstract public function processor();

        public function os() 
        {
            return "Android";
        }
    }

?>