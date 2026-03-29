<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;

class PortofolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $skills = Skill::all();

        return view('portofolio.index', compact('projects', 'skills'));
    }
}