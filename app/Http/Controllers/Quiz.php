<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class Quiz extends Controller
{
    function DoListFromFile()
        {
            if (Storage::fileExists('local')) {
                $arr = explode(PHP_EOL, Storage::get('local'));
                return $arr; 
            }
            return 0;
        }
    

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
        
        Storage::append('local', $title);
        $str = $this->DoListFromFile();
        return redirect('');
        
        
    }
    function edit(string $id)
    {
        return view('Pages.edit')->with('id', $id);
    }

    function edit_confirmed(Request $request) : RedirectResponse
    {
        $id = $request->input('strId');
        $title = $request->input('title');
        
        $arr = explode(PHP_EOL, Storage::get('local'));
        
        print_r($id);
        $arr["$id"] = $title;
        print_r($arr);
        $arr = implode(PHP_EOL,$arr);
        Storage::put('local', $arr);
        return redirect('');
    }
    
    function delete(string $id)
    {
        return view('Pages.delete')->with('id', $id);
    }

    function delete_confirmed(Request $request)
    {
        $id = $request->input('strId');
        $arr = explode(PHP_EOL, Storage::get('local'));
        
        unset($arr["$id"]);
        $arr = implode(PHP_EOL,$arr);
        Storage::put('local', $arr);
        return redirect('');
    }
}
