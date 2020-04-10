<?php 
    class Cars {

        public $wheel_count = 4;
        /* protected $door_count = 4;
        private $set_count = 2; */
        static $door_count = 4;

       
        static function car_details() {
            echo Cars::$door_count;
        }        
        function car_detailsTwo() {
            echo $this -> wheel_count;
            echo $this -> door_count;
            echo $this -> set_count;
        }  
    }

    $bmw = new Cars();
    // Using :: will access static properties and values
    echo Cars::$door_count;
    echo Cars::car_details();


?>