<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\QuestionList;
use App\Classes\Question;

class MainController extends Controller
{
    use QuestionList;

    public function index()
    {
        $question =  $this->getDamageTypeQuestion();
        $questionString = $question->getQuestionString();
        //dd($question);
        $answers = $question->getAnswers();


        return view('main', compact('questionString', 'answers'));
    }
    public function show(Request $request)
    {
        dd($request->input('selectedAnswer'));
    }
}
