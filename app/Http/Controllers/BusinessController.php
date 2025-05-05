<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::latest()->paginate(9);
        return view('businesses.index', compact('businesses'));
    }
}
