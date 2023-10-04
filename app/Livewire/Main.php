<?php

namespace App\Livewire;

use App\Classes\MultipathQuestion;
use App\Classes\Question;
use Livewire\Component;

use App\Traits\QuestionList;

class Main extends Component
{
    use QuestionList;
    public $questionString  = "";
    private Question $question;
    public function mount()
    {
        $this->question = $this->getDamageTypeQuestion();
        $this->questionString = $this->question->getQuestionString();
    }
    // public $questionString = "What auto-attack range do you prefer?";


    public function render()
    {
        return view('livewire.main');
    }
}
