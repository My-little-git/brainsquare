<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('course.index');
    }
}
