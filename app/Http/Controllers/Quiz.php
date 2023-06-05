<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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

    function createQuiz_confirmed(Request $request)
    {
        $title = $request->input('local');
        Storage::append('local', $title);
        $str = $this->DoListFromFile();
        echo $this->DoListFromFile();
        return view("Pages.create_confirmed");
        
        
    }

    
}
