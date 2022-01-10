<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/UserPremium.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-2</title>
</head>
<body>
    <main>
        <section>
            <h1>
                <?php 
                    $user_1 = new User('Tommy', 'Shelby'); 
                    echo "Account Name: {$user_1->printFullName()}"
                ?>
            </h1>
            <h3>
                <?php
                    echo "User: {$user_1->printUserType()} <br> Shipment: {$user_1->setShipment()}";
                ?>
            </h3>
        </section>

        <section>
            <h1>
                <?php 
                    $user_2 = new UserPremium('Jax', 'Teller'); 
                    echo "Account Name: {$user_2->printFullName()}"
                ?>
            </h1>
            <h3>
                <?php
                    echo "User: {$user_2->printUserType()} <br> Shipment: {$user_2->setShipment()} <br> Priority: {$user_2->printpriority()}";
                ?>
            </h3>
        </section>
    </main>
</body>
</html>
