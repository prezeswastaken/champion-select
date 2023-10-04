<?php

namespace App\Classes;

abstract class Question
{
    protected $answers = [];
    protected String $questionString = "";
    public function __construct($answers, $questionString)
    {
        $this->answers = $answers;
        $this->questionString = $questionString;
    }

    abstract public function getQuestionString();
}
