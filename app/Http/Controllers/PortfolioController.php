<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function homepage()
    {
        return view('portfolio.homepage', [
            'projects' => Project::visibility()->get(),
        ]);
    }
}
