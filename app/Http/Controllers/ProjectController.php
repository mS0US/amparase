<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Página de Projetos
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $projects = Project::all();

        return view('project', compact('projects'));
    }
}