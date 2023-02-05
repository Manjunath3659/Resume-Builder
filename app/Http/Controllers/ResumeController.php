<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ResumeController extends Controller
{
    
    public function index()
    {
        $user = auth()->user();
        return view('resume', compact('user'));
    }


    public function download()
    {
        $user = auth()->user();

        $pdf = \PDF::loadView('resume', compact('user'));
        return $pdf->download('resume.pdf');
    }
    function __construct()
    {
        $this->middleware('auth');
    }


      }
