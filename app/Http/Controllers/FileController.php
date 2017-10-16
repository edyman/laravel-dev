<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $path = public_path().'/uploads/';
        $files = $request->file('file');
        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
        }
    }

    public function index(Request $request){
        if ($request->ajax())
            return view('partials.dropzone')->render();
        return view('form');
    }
}
