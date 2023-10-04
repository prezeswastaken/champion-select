<?php

namespace App\Classes;

class Result extends Question
{
    private $championName;
    public function __construct($championName)
    {
        $this->championName = $championName;

    }
    public function getQuestionString()
    {
        return $this->championName;
    }
    public function getNewQuestionFromAnswer(Answer $answer)
    {

    }
    public function getAnswers()
    {

    }

}
