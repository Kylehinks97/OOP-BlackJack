<?php 

require 'Card.php';
require 'Deck.php';
require 'Player.php';


$deck = new Deck();

foreach ($deck->getCards() as $card) {
    echo $card . "\n";
}


?>