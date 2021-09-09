<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $title = 'EMPTY title';

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($titleText)
    {
        $this->title = $titleText;
        view()->share('title', $titleText);
    }
}
