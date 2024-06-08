<?php

namespace App\Http\Controllers;
use App\Models\dataalumni;
use Illuminate\Http\Request;

class dataalumniuserController extends Controller
{
    public function dataalumniuser()
    {
        $dataalumnis = dataalumni::all(); 
        return view('user.dataalumniuser', compact('dataalumnis'));
    }
}
