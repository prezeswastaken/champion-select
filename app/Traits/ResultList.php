<?php

namespace App\Traits;

use App\Classes\Result;

trait ResultList
{
    public function getRyze()
    {
        return new Result("Ryze", "aaa", "bbb");
    }

    public function getRiven()
    {
        return new Result("Riven", "bbb", "ccc");
    }
    public function getSoraka()
    {
        return new Result("Soraka", "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Soraka_0.jpg", "The Starchild");
    }
    public function getKarma()
    {
        $name = "Karma";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Karma_0.jpg";
        $description = "the Enlightened One";
        return new Result($name, $linkToImage, $description);
    }
    public function getJanna()
    {
        $name = "Janna";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Janna_0.jpg";
        $description = "the Storm's Fury";
        return new Result($name, $linkToImage, $description);
    }
}
