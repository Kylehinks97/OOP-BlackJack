<?php

require 'Card.php';
require 'Deck.php';
require 'Player.php';

class Game {
    private $player;
    private $dealer;
    private $deck;

    public function __construct()
    {
        $this->player = new Player('Player 1');
        $this->dealer = new Player('Dealer');
        $this->deck = new Deck();
    }

    public function start()
    {
        $this->player->hit($this->deck->deal());
        $this->player->hit($this->deck->deal());
        $this->dealer->hit($this->deck->deal());
        $this->dealer->hit($this->deck->deal());
    }

    public function getPlayer()
    {
        return $this->player;
    }

    public function getDeck() {
        return $this->deck;
    }

    public function getDealer()
    {
        return $this->dealer;
    }

}
