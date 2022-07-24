<?php

namespace App\Http\Controllers;
use App\Resume;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResumeController extends Controller
{
    public function index(){
        return view('resume.index');
    }

    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'email' => 'required|email|unique:resumes',
        //     'name' => 'required',
        //     'subject' => 'required',
        //     'message' => 'required',
        // ]);
        // $resume = new Resume;
        // $resume->name = $request->name;
        // $resume->email = $request->email;
        // $resume->subject = $request->subject;
        // $resume->message = $request->message;
        // $resume->save();
        echo response()->json(['success'=>'Data is successfully added']);
        die();
    }
    
}
