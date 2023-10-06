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

        $this->createResultList();
        $this->createQuestionList();

        return $this->questionList;

    }


    private function createResultList()
    {
        $this->createPlaceHolder();
        $this->createAnnie();
        $this->createVictor();
        $this->createSoraka();
        $this->createKarma();
        $this->createJanna();
        $this->createRyze();
        $this->createCassiopeia();
        $this->createXerath();
        $this->createVelKoz();
    }

    private function createQuestionList()
    {


        $this->createShielderTypicalQuestion();
        $this->createShielderQuestion();
        $this->createTankyMageQuestion();
        $this->createDpsMageQuestion();
        $this->createShortRangeQuestion();
        $this->createLongRangeQuestion();
        $this->createMageQuestion();
        $this->createSupportRoleQuestion();
        $this->createApRoleQuestion();
        $this->createAdRoleQuestion();
        $this->createDamageTypeQuestion();
    }

    // Create methods for result champions

    private function createPlaceHolder()
    {
        $this->questionList[] = $this->getPlaceHolder();
    }
    private function createVelKoz()
    {
        $this->questionList[] = $this->getVelKoz();
    }
    private function createXerath()
    {
        $this->questionList[] = $this->getXerath();
    }
    private function createAnnie()
    {
        $this->questionList[] = $this->getAnnie();
    }
    private function createVictor()
    {
        $this->questionList[] = $this->getVictor();
    }
    private function createCassiopeia()
    {
        $this->questionList[] = $this->getCassiopeia();
    }
    private function createRyze()
    {
        $this->questionList[] = $this->getRyze();
    }
    private function createSoraka()
    {
        $this->questionList[] = $this->getSoraka();
    }
    private function createKarma()
    {
        $this->questionList[] = $this->getKarma();
    }
    private function createJanna()
    {
        $this->questionList[] = $this->getJanna();
    }
    public function createDamageTypeQuestion()
    {
        $questionString = "What kind of damage do you want to deal?";


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

        $answer = new Answer('Short range', $this->shortRangeQuestion);
        $answers[] = $answer;
        $answer = new Answer('Long range', $this->longRangeQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->mageQuestion = $questionToAdd;
    }
    private $longRangeQuestion;
    public function createLongRangeQuestion()
    {
        $questionString = "Do you have more than 50 IQ?";


        $answers = [];

        $answer = new Answer('Yes', $this->getXerath());
        $answers[] = $answer;
        $answer = new Answer('YYYYYYYGHGHGHGHHG', $this->getVelKoz());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->longRangeQuestion = $questionToAdd;
    }
    private $shortRangeQuestion;
    public function createShortRangeQuestion()
    {
        $questionString = "What kind of mage do you want to be?";


        $answers = [];

        $answer = new Answer('Tanky mage', $this->tankyMageQuestion);
        $answers[] = $answer;
        $answer = new Answer('DPS mage', $this->dpsMageQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->shortRangeQuestion = $questionToAdd;
    }
    private $dpsMageQuestion;
    public function createDpsMageQuestion()
    {
        $questionString = "Do you want to die in 2 seconds?";


        $answers = [];

        $answer = new Answer('Yes', $this->getAnnie());
        $answers[] = $answer;
        $answer = new Answer('No', $this->getVictor());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->dpsMageQuestion = $questionToAdd;
    }
    private $tankyMageQuestion;
    public function createTankyMageQuestion()
    {
        $questionString = "Do you want to practice 10 hours a day to be good with you champion?";


        $answers = [];

        $answer = new Answer('Yes', $this->getRyze());
        $answers[] = $answer;
        $answer = new Answer('Nope', $this->getCassiopeia());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->tankyMageQuestion = $questionToAdd;
    }
    private $shielderQuestion;
    public function createShielderQuestion()
    {
        $questionString = "Do you want to be able to deal some damage, or just be a good shielder?";


        $answers = [];

        $answer = new Answer('Damage', $this->getKarma());
        $answers[] = $answer;
        $answer = new Answer('Typical shielder', $this->getJanna());
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
    private $supportRoleQuestion;
    public function createSupportRoleQuestion()
    {
        $questionString = "Do you want to be shielder or healer?";


        $answers = [];

        $answer = new Answer('Healer', $this->getSoraka());
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
