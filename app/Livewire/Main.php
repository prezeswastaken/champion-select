<?php

namespace App\Livewire;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use Livewire\Component;

use App\Traits\QuestionList;

class Main extends Component
{
    use QuestionList;


    public $questionString  = "";
    private Question $question;
    private $answers = [];

    public String $answerA;
    public $answerB;

    private $answerAObject;

    public function mount()
    {
        $this->question = $this->getDamageTypeQuestion();
        $this->questionString = $this->question->getQuestionString();
        $this->answers = $this->question->getAnswers();
        $this->answerAObject = $this->answers[0];
        $this->answerA = $this->answers[0]->getAnswerString();
        $this->answerB = $this->answers[1]->getAnswerString();
        //dd($this->answerAObject);
    }



    public function handleClick($answerString)
    {
        //$this->questionString = $answerString;
        $selectedAnswer = null;
        if ($answerString == $this->answerA) {
            $selectedAnswer = $this->answerAObject;
        } else {
            $selectedAnswer = $this->answerB;
        }
        //dd($this->answerAObject);
        $this->questionString = $this->getApRoleQuestion()->getQuestionString();
    }
    public function render()
    {
        return view('livewire.main');
    }
}
