<?php

include __DIR__ . "creditCard.php";
include __DIR__ . "user.php";
include __DIR__ . "userPremium.php";
include __DIR__ . "product.php";
include __DIR__ . "tv.php";
include __DIR__ . "smartphone.php";


$utente1 = new User("Pippo", "pippo123", "pippo@gmail.com", new creditCard("Visa", 2000));
$utente2 = new User("Pluto", "pluto123", "pluto@gmail.com", new creditCard("Mastercard", 1000));
$utente3 = new UserPremium("Paperino", "paperino123", "paperino@gmail.com", new creditCard("Visa", 500));

$prodotto1 = new Product("Impasto per pizza", 20);
$prodotto2 = new Smartphone("Xiaomi", "Mi10", 300, 20);
$prodotto3 = new Tv("Toshiba", "X123", 700, 50);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>