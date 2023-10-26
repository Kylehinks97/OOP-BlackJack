<?php

class Player
{
    private $hand = [];
    private $score = 0;

    public function hit(Card $card)
    {
        $this->hand = $card;
        $this->calculateScore();
    }

    public function calculateScore()
    {
        $this->score = 0;
        $aces = 0;

        foreach ($this->hand as $card) {
            $value = $card->getValue();

            if (in_array($value, ['Jack', 'Queen', 'King'])) {
                $this->score += 10;
            } elseif ($value == 'Ace') {
                $aces++;
            } else {
                $this->score += intval($value);
            }
        }
        while ($this->score > 21 && $aces > 0) {
            $this->score -= 10;
            $aces--;
        }
    }

    public function getScore() {
        return $this->score;
    }

    public function getHand()
    {
        return $this->hand;
    }
}
