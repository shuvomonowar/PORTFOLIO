<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Project extends Controller
{
    public function __invoke(): View {
        return view('project');
    }
}
