<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class MainController extends Controller
{
    public function home()
    {
        $people = People::all();

        return view('pages.home', compact('people'));
    }
}