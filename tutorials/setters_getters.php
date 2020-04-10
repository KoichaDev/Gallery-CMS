<?php 
    class Cars {

    
        private $door_count = 4; 

        function get_values() {
            echo $this -> door_count;
        }
    
        function set_values($val) {
            return $this -> door_count = $val;
        }
    }

    $bmw = new Cars();
    
    $bmw -> set_values(20);

    $bmw -> get_values();

?>