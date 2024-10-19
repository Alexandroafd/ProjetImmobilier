<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $properties = Property::whereNotNull('images')->available()->orderBy('created_at', 'desc')->limit(6)->get();
        return view('home', [
            'properties' => $properties
        ]);
    }
}
