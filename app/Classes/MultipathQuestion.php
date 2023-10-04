<?php

namespace App\Classes;

class MultipathQuestion extends Question
{
    public function __construct($answers, $questionString)
    {
        parent::__construct($answers, $questionString);
    }

    public function getQuestionString()
    {
        return $this->questionString;
    }
    public function getNewQuestionFromAnswer(Answer $answer): Question
    {
        return $answer->getNextQuestion();
    }

    public function getAnswers()
    {
        return $this->answers;
    }
}
