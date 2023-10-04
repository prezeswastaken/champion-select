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
        $questions = $this->getQuestionList();
        $this->question = end($questions);
        //dd($this->question);

        $this->questionString = $this->question->getQuestionString();
        $this->answers = $this->question->getAnswers();
        $this->answerA = $this->answers[0]->getAnswerString();
        $this->answerB = $this->answers[1]->getAnswerString();
        //dd($this->getQuestionByQuestionString('Riven'));
    }



    public function handleClick($answerString)
    {
        $answeredQuestion = $this->getQuestionByQuestionString($this->questionString);
        $answerA = $answeredQuestion->getAnswers()[0]->getAnswerString();
        $answerB = $answeredQuestion->getAnswers()[1]->getAnswerString();
        //dd($answerB);
        if ($answerString == $answerA) {

            //$this->question = $answeredQuestion->getAnswers();
            $nextQuestionString = $answeredQuestion->getAnswers()[0]->getNextQuestion()->getQuestionString();
            $question = $this->getQuestionByQuestionString($nextQuestionString);
            $this->question = $question;
            $this->questionString = $this->question->getQuestionString();
            $this->answers = $this->question->getAnswers();
            $this->answerA = $this->answers[0]->getAnswerString();
            $this->answerB = $this->answers[1]->getAnswerString();

            //dd('A was answered');
        } elseif ($answerString == $answerB) {
            dd('B was answered');
        }


    }
    public function render()
    {
        return view('livewire.main');
    }
}
