<?php

namespace App\Classes;

class Result extends Question
{
    private String $linkToImage;
    private String $description;

    public function __construct($championName, $linkToImage, $description)
    {
        $this->questionString = $championName;
        $this->linkToImage = $linkToImage;
        $this->description = $description;

    }
    public function getQuestionString()
    {
        return $this->questionString;
    }
    public function getNewQuestionFromAnswer(Answer $answer)
    {

    }
    public function getAnswers()
    {

    }
    public function getLinkToImage()
    {
        return $this->linkToImage;
    }

    public function getDescription()
    {
        return $this->description;
    }

}
