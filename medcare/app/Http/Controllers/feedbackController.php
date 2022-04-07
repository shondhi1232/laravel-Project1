<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class feedbackController extends Controller
{

    public function addfeedback()
    {

        return view('feedback.index');
    }

}
