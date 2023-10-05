<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;

trait QuestionList
{
    use ResultList;
    private $questionList = [];
    public function getQuestionList()
    {
        $this->createQuestionList();
        return $this->questionList;

    }
    private function createQuestionList()
    {
        $this->createHealerRoleQuestion();
        $this->createShielderDamageQuestion();
        $this->createShielderTypicalQuestion();
        $this->createShielderQuestion();
        $this->createMageQuestion();
        $this->createSupportRoleQuestion();
        $this->createApRoleQuestion();
        $this->createAdRoleQuestion();
        $this->createDamageTypeQuestion();
    }
    private $healerQuestion;
    public function createHealerRoleQuestion()
    {
        $questionString = "Soraka";


        $answers = [];

        $answer = new Answer('Healer', $this->getRyze());
        $answers[] = $answer;
        $answer = new Answer('Shielder', $this->getRyze());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->healerQuestion = $questionToAdd;
    }
    public function createDamageTypeQuestion()
    {
        $questionString = "What kind of damage do you wish to deal?";


        $answers = [];

        $answer = new Answer('Magic damage', $this->apRoleQuestion);
        $answers[] = $answer;
        $answer = new Answer('Physical damage', $this->adRoleQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
    }

    private $apRoleQuestion;
    public function createApRoleQuestion()
    {
        $questionString = "Do you want to be mage or support?";


        $answers = [];

        $answer = new Answer('Support', $this->supportRoleQuestion);
        $answers[] = $answer;
        $answer = new Answer('Mage', $this->mageQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->apRoleQuestion = $questionToAdd;
    }
    private $mageQuestion;
    public function createMageQuestion()
    {
        $questionString = "What range do you prefer?";


        $answers = [];

        $answer = new Answer('Short range', $this->getRyze());
        $answers[] = $answer;
        $answer = new Answer('Long range', $this->getRyze());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->mageQuestion = $questionToAdd;
    }
    private $shielderQuestion;
    public function createShielderQuestion()
    {
        $questionString = "Do you want to be able to deal some damage, or just be a good shielder?";


        $answers = [];

        $answer = new Answer('Damage', $this->shielderDamageQuestion);
        $answers[] = $answer;
        $answer = new Answer('Typical shielder', $this->shielderTypicalQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->shielderQuestion= $questionToAdd;
    }
    private $shielderTypicalQuestion;
    public function createShielderTypicalQuestion()
    {
        $questionString = "Janna is for you";


        $answers = [];

        $answer = new Answer('Damage', $this->getRyze());
        $answers[] = $answer;
        $answer = new Answer('Tank', $this->getRyze());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->shielderTypicalQuestion = $questionToAdd;
    }
    private $shielderDamageQuestion;
    public function createShielderDamageQuestion()
    {
        $questionString = "Karma is for you";


        $answers = [];

        $answer = new Answer('Damage', $this->getRyze());
        $answers[] = $answer;
        $answer = new Answer('Tank', $this->getRyze());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->shielderDamageQuestion = $questionToAdd;
    }
    private $supportRoleQuestion;
    public function createSupportRoleQuestion()
    {
        $questionString = "Do you want to shielder or healer?";


        $answers = [];

        $answer = new Answer('Healer', $this->healerQuestion);
        $answers[] = $answer;
        $answer = new Answer('Shielder', $this->shielderQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->supportRoleQuestion = $questionToAdd;
    }


    public function getQuestionByQuestionString($questionString)
    {
        $questions = $this->getQuestionList();
        //dd($questions);
        foreach ($questions as $question) {
            //dd($question->questionString);
            if ($question->questionString == $questionString) {
                return $question;
            }
        }
    }

    /*private $apRoleQuestion;
    public function createApRoleQuestion()
    {
        $questionToAdd = $apRoleQuestion = $this->getRyze();
        $this->questionList[] = $questionToAdd;
        $this->apRoleQuestion = $questionToAdd;
    }*/

    private $adRoleQuestion;
    public function createAdRoleQuestion()
    {
        $questionToAdd = $adRoleQuestion = $this->getRiven();
        $this->questionList[] = $questionToAdd;
        $this->adRoleQuestion = $questionToAdd;
    }


}
