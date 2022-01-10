<!-- Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi.
Di nuovo buon lavoro e a domani  -->

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

    // Classe with extends
    class UserPremium extends User {
        private $priority;

        // Construct
        public function __construct ($name, $last_name, $user_type = 'Basic', $shipment = '3-5 days', $priority = 'MAX') 
        {
           // call the parent
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

    // Istances
    $user_1 = new User('Tommy', 'Shelby');
    var_dump($user_1);
    echo "Account Name: {$user_1->printFullName()} <br> User: {$user_1->printUserType()} <br> Shipment: {$user_1->setShipment()}";

    $user_2 = new UserPremium('Jax', 'Teller');
    var_dump($user_2);
    echo "Account Name: {$user_2->printFullName()} <br> User: {$user_2->printUserType()} <br> Shipment: {$user_2->setShipment()} <br> Priority: {$user_2->printpriority()}";
?>