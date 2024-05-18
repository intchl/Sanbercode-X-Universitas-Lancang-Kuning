<?php
    require_once('animal.php');

    Class Ape extends Animal {
        public $legs = 2;
        
        public function yell(){
            return "Auooo";
        }
    }
?>
