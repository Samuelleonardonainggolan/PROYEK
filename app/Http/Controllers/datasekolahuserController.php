<?php

namespace App\Http\Controllers;

use App\Models\datasekolah;

class datasekolahuserController extends Controller
{
    public function datasekolahuser()
    {
        $datasekolahuser = datasekolah::first(); // Assuming there's only one entry for visi and misi
        return view('user.datasekolahuser', compact('datasekolahuser'));
    }

}
