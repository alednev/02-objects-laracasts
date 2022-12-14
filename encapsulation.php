<?php

class TennisMatch
{
    protected string $playerOne;

    public function score() : array
    {
        return [
            $this->hasWinner(),
            $this->hasAdvantage(),
            $this->inDeuce(),
        ];
    }

    protected function hasWinner() : void
    {

    }

    protected function hasAdvantage() : void
    {

    }

    protected function inDeuce() : void
    {

    }

    public function playerOne() : string
    {
        return $this->playerOne;
    }
}

$match = new TennisMatch();

var_dump($match->score(), $match->playerOne());