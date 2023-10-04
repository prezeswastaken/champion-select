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
}
