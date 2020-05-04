<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function showAddPortfolioPage ( $username )
    {
        //$username = Session()->get('username');

        echo $username."'s portfolio";
    }
}
