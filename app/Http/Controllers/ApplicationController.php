<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();

        return view('pages/applications', compact('applications'));
    }

    public function show()
    {
        $applications = Application::where('user_id',)->get();

        return view('pages/applications', compact('applications'));
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function search()
    {

    }
}
