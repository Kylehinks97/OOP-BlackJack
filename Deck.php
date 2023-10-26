<?php

class Deck
{
    private $cards = [];

    public function __construct()
    {
        $suits = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace'];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $this->cards[] = new Card($suit, $value);
            }
        }
    }

    public function shuffle($cards)
    {
        return shuffle($cards);
    }

    public function getCards()
    {
        return $this->cards;
    }

    public function deal()
    {
        return array_pop($this->cards);
    }
}

?>