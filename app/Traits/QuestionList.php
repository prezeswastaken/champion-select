<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;

trait QuestionList
{
    use ResultList;
    public function getDamageTypeQuestion(): Question
    {
        $questionString = "What kind of damage do you wish to deal?";


        $answers = [];

        $answer = new Answer('Magic damage', $this->getApRoleQuestion());
        $answers[] = $answer;
        $answer = new Answer('Physical damage', $this->getAdRoleQuestion());
        $answers[] = $answer;


        return new MultipathQuestion($answers, $questionString);
    }
    public function getApRoleQuestion()
    {
        return $this->getRyze();
    }

    public function getAdRoleQuestion()
    {
        return $this->getRiven();
    }
}
