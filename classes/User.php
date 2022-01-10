<?php
    // Definisco la classe root
    class User {
        protected $name;
        protected $last_name;
        protected $user_type;
        protected $shipment;

        // Construct
        public function __construct ($name, $last_name, $user_type = 'Basic', $shipment = '3-5 days') 
        {
            $this->name = $name;
            $this->last_name = $last_name;
            $this->user_type = $user_type;
            $this->shipment = $shipment;
        }

        // Methods
        public function printFullName() {
            return $this->name . ' ' . $this->last_name;
        }

        public function printUserType() {
            return $this->user_type;
        }

        public function setShipment() {
            return $this->shipment;
        }
    }
?>