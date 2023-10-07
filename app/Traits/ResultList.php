<?php

namespace App\Traits;

use App\Classes\Result;

trait ResultList
{
    public function getPlaceHolder()
    {
        return new Result("I can't believe you came here!", "https://i.pinimg.com/originals/ec/bc/ca/ecbcca858e30291003151c8c16b2d206.gif", "that's what she said");
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
        $name = "Vel'Koz";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Velkoz_0.jpg";
        $description = "the Eye of the Void";
        return new Result($name, $linkToImage, $description);
    }
    public function getNautilus()
    {
        $name = "Nautilus";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nautilus_0.jpg";
        $description = "the Titan of the Depths";
        return new Result($name, $linkToImage, $description);
    }
    public function getTaric()
    {
        $name = "Taric";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Taric_0.jpg";
        $description = "the Shield of Valoran";
        return new Result($name, $linkToImage, $description);
    }
    public function getLeona()
    {
        $name = "Leona";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Leona_0.jpg";
        $description = "the Radiant Dawn";
        return new Result($name, $linkToImage, $description);
    }
    public function getPyke()
    {
        $name = "Pyke";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Pyke_0.jpg";
        $description = "the Bloodharbor Ripper";
        return new Result($name, $linkToImage, $description);
    }
    public function getPantheon()
    {
        $name = "Pantheon";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Pantheon_0.jpg";
        $description = "the Unbreakable Spear";
        return new Result($name, $linkToImage, $description);
    }
    public function getKayn()
    {
        $name = "Kayn";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kayn_0.jpg";
        $description = "the Shadow Reaper";
        return new Result($name, $linkToImage, $description);
    }
    public function getKhaZix()
    {
        $name = "Kha'zix";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Khazix_0.jpg";
        $description = "the Voidreaver";
        return new Result($name, $linkToImage, $description);
    }
    public function getRiven()
    {
        $name = "Riven";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Riven_0.jpg";
        $description = "the Exile";
        return new Result($name, $linkToImage, $description);
    }
    public function getMasterYi()
    {
        $name = "Master Yi";
        $linkToImage = "https://www.lolporadnik.pl/wp-content/uploads/2020/12/master-yi.jpg";
        $description = "the Wuju Bladesman";
        return new Result($name, $linkToImage, $description);
    }
    public function getMalphite()
    {
        $name = "Malphite";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Malphite_0.jpg";
        $description = "Shard of the Monolith";
        return new Result($name, $linkToImage, $description);
    }
    public function getSion()
    {
        $name = "Sion";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sion_0.jpg";
        $description = "The Undead Juggernaut";
        return new Result($name, $linkToImage, $description);
    }
    public function getSett()
    {
        $name = "Sett";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sett_0.jpg";
        $description = "the Boss";
        return new Result($name, $linkToImage, $description);
    }
    public function getGaren()
    {
        $name = "Garen";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Garen_0.jpg";
        $description = "The Might of Demacia";
        return new Result($name, $linkToImage, $description);
    }
}
