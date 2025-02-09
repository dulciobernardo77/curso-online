<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $featuredCourses = Course::where('featured', true)
            ->take(6)
            ->get();

        return view('welcome', compact('featuredCourses'));
    }
}
