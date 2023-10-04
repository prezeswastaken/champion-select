<?php

namespace App\Classes;

class Result extends Question
{
    public function __construct($championName)
    {
        $this->questionString = $championName;

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

}
