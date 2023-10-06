<?php

namespace App\Traits;

use App\Classes\Result;

trait ResultList
{
    public function getPlaceHolder()
    {
        return new Result("I can't believe you came here!", "https://i.pinimg.com/originals/ec/bc/ca/ecbcca858e30291003151c8c16b2d206.gif", "that's what she said");
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
    public function getRyze()
    {
        $name = "Ryze";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ryze_0.jpg";
        $description = "The rune mage";
        return new Result($name, $linkToImage, $description);
    }
    public function getCassiopeia()
    {
        $name = "Cassiopeia";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Cassiopeia_0.jpg";
        $description = "the Serpent's Embrace";
        return new Result($name, $linkToImage, $description);
    }
    public function getVictor()
    {
        $name = "Victor";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Viktor_0.jpg";
        $description = "Viktor, the Machine Herald";
        return new Result($name, $linkToImage, $description);
    }
    public function getAnnie()
    {
        $name = "Annie";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Annie_0.jpg";
        $description = "the Dark Child";
        return new Result($name, $linkToImage, $description);
    }
    public function getXerath()
    {
        $name = "Xerath";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Xerath_0.jpg";
        $description = "the Magus Ascendant";
        return new Result($name, $linkToImage, $description);
    }
    public function getVelKoz()
    {
        $name = "Vel' Koz";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Velkoz_0.jpg";
        $description = "the Eye of the Void";
        return new Result($name, $linkToImage, $description);
    }
}
