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
    public function mount()
    {
        $this->question = $this->getDamageTypeQuestion();
        $this->questionString = $this->question->getQuestionString();
        $this->answers = $this->question->getAnswers();
        //dd($this->answers);
    }



    public function handleClick($answerString)
    {
        dd($answerString);
    }
    public function render()
    {
        $answers = $this->answers;
        return view('livewire.main', compact('answers'));
    }
}
