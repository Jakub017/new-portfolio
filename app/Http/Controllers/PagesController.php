<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $projects = Project::orderBy('id', 'asc')->with('techs')->get();
        return Inertia::render('Index', [
            'projects' => $projects
        ]);
    }
}
