<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;

class WebsiteController extends Controller
{
    public function index()
    {
        // Retrieve all websites from the database
        $websites = Website::all();

        // Pass data to the view
        return view('welcome', compact('websites'));
    }
}
