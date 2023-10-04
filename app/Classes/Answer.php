<?php

namespace App\Classes;

class Answer
{
    private $answerString;
    private $nextQuestion;

    public function __construct(String $answerString, Question $nextQuestion)
    {
        $this->answerString = $answerString;
        $this->nextQuestion = $nextQuestion;
    }

    public function getAnswerString()
    {
        return $this->answerString;
    }

    public function getNextQuestion()
    {
        return $this->nextQuestion;
    }
}
