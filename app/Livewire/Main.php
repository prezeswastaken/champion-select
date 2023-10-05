<?php

namespace App\Livewire;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Classes\Result;
use Livewire\Component;

use App\Traits\QuestionList;

class Main extends Component
{
    use QuestionList;


    public $finished = false;
    public $linkToImage = "";
    public $description = "";

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

        $this->questionString = $this->question->getQuestionString();
        $this->answers = $this->question->getAnswers();
        $this->answerA = $this->answers[0]->getAnswerString();
        $this->answerB = $this->answers[1]->getAnswerString();
    }



    public function handleClick($answerString)
    {
        $answeredQuestion = $this->getQuestionByQuestionString($this->questionString);
        $answerA = $answeredQuestion->getAnswers()[0]->getAnswerString();
        $answerB = $answeredQuestion->getAnswers()[1]->getAnswerString();
        $nextQuestionString = "";

        if ($answerString == $answerA) {

            $nextQuestionString = $answeredQuestion->getAnswers()[0]->getNextQuestion()->getQuestionString();

        } elseif ($answerString == $answerB) {
            $nextQuestionString = $answeredQuestion->getAnswers()[1]->getNextQuestion()->getQuestionString();
        }

        $question = $this->getQuestionByQuestionString($nextQuestionString);

        /** @var Result $question */
        if ($question instanceof Result) {
            $result = $question;
            $this->questionString = $result->getQuestionString();

            $this->finished = true;
            $this->linkToImage = $result->getLinkToImage();
            $this->description = $result->getDescription();

            return;
        } else {
            $this->question = $question;
            $this->questionString = $this->question->getQuestionString();
            $this->answers = $this->question->getAnswers();
            $this->answerA = $this->answers[0]->getAnswerString();
            $this->answerB = $this->answers[1]->getAnswerString();
        }



    }
    public function render()
    {
        return view('livewire.main');
    }
}
