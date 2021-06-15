<?php

include "creditCard.php";
include "user.php";
include "userPremium.php";
include "product.php";
include "tv.php";
include "smartphone.php";


$utente1 = new User("Pippo", "pippo123", "pippo@gmail.com", new creditCard("Visa", 2000));
$utente2 = new User("Pluto", "pluto123", "pluto@gmail.com", new creditCard("Mastercard", 1000));
$utente3 = new UserPremium("Paperino", "paperino123", "paperino@gmail.com", new creditCard("Visa", 250));

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
    <p>L'utente 1 (<?php echo $utente1->getUsername() ?>) compra i prodotti 1 e 2 (<?php echo $prodotto1->getNomeProdotto() . " e " . $prodotto2->getNomeProdotto() ?>).</p>
    <?php
    $utente1->aggiungiAlCarrello($prodotto1);
    $utente1->aggiungiAlCarrello($prodotto2);
    echo "<p>" . $utente1->getCarta()->effettuaPagamento($utente1->getTotaleCarrello()) . "</p>";
    ?>

    <p>L'utente 2 (<?php echo $utente2->getUsername() ?>) compra il prodotto 3 (<?php echo $prodotto3->getNomeProdotto() ?>), perchè è in sconto di 50 euro.</p>
    <?php
    $prodotto3->setSconto(50);
    $utente2->aggiungiAlCarrello($prodotto3);
    echo "<p>" . $utente2->getCarta()->effettuaPagamento($utente2->getTotaleCarrello()) . "</p>";
    ?>

    <p>L'utente 3 (<?php echo $utente3->getUsername() ?>) prova a comprare il prodotto 2 (<?php echo $prodotto2->getNomeProdotto() ?>), perchè ha uno sconto personale di 10 euro.</p>
    <?php
    $utente3->aggiungiAlCarrello($prodotto2);
    echo "<p>" . $utente3->getCarta()->effettuaPagamento($utente3->applicaScontoPersonale($utente3->getTotaleCarrello())) . "</p>";
    ?>
</body>
</html>