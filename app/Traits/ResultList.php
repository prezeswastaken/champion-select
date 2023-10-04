<?php

namespace App\Traits;

use App\Classes\Result;

trait ResultList
{
    public function getRyze()
    {
        return new Result("Ryze");
    }

    public function getRiven()
    {
        return new Result("Riven");
    }
}
