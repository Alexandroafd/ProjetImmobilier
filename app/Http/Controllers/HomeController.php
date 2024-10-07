<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $properties = Property::whereNotNull('image')->available()->orderBy('created_at', 'desc')->limit(16)->get();
        return view('home', [
            'properties' => $properties
        ]);
    }
}
