<?php
    require_once __DIR__ . '/User.php';

    // Class with extends
    class UserPremium extends User {
        private $priority;

        // Construct
        public function __construct ($name, $last_name, $user_type = 'Basic', $shipment = '3-5 days', $priority = 'MAX') 
        {
            // Call the parent
            parent::__construct($name, $last_name, $user_type, $shipment);
            $this->priority = $priority;
        }

        // Methods
        public function printpriority () {
            return $this->priority;
        }

        public function printUserType() {
            return $this->user_type = 'Premium';
        }

        public function setShipment() {
            if($this->user_type == 'Premium') {
                return $this->shipment = '1-2 days';
            } else {
                return $this->shipment = '3-5 days';
            }
        }
    }
?>