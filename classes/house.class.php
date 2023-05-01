<?php 
    class House {
        private $id;
        public $address;
        private $size;
        private $num_beds;
        private $num_baths;

        public function __construct($id, $address, $size, $num_beds, $num_baths){
            $this->id = $id;
            $this->address = $address;
            $this->size = $size;
            $this->num_beds = $num_beds;
            $this->num_baths = $num_baths;
        }
    }    

    class Apartment extends House {
        private $num_rooms;

        public function __construct($id, $address, $size, $num_beds, $num_baths, $num_rooms){
            
        }
    }