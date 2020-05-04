<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function showProfile ( $user )
    {
        echo ('this is profile page for '. $user);
    }
}
