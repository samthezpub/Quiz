<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Quiz extends Controller
{
    function index()
    {
        return view('Pages.index');
    }

    function createQuiz()
    {
        return view('Pages.create');
    }

    function createQuiz_confirmed(Request $request):RedirectResponse
    {
        $title = $request->input('title');
        
        return $title;
        redirect()->route('');
    }
}
