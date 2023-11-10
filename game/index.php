<?php 

require 'Game.php';

$game = new Game();
$deck = $game->getDeck();
$deck->shuffle();
$cards = $deck->getCards();
$player = $game->getPlayer();
$dealer = $game->getDealer();
$game->start();

$playerHand = $player->getHand();
$playerScore = $player->getScore();

$dealerHand = $dealer->getHand();
$dealerScore = $dealer->getScore();

print_r($playerHand[0]);
print_r($playerHand[1]);
echo $playerScore . "<-- Your score";
echo $playerScore === 21 ? 'You won!' : 'Hit or stick?';

$newCard = $deck->deal();
$player->hit($newCard);
$newPlayerScore = $player->getScore();

print_r($player->getHand());

echo $newPlayerScore > 21 ? 'Bust!' : $newPlayerScore . 'Hit Again?';

print 'Hi';

?>