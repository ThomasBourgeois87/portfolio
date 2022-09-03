<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectArticleElements;

class ProjectController extends Controller
{
    public function homepage()
    {
        return view('portfolio.homepage', [
            'projects' => Project::visibility()->get(),
        ]);
    }


    public function show(Project $project)
    {
        $projectVisible = Project::visibility($project->id)->get()->first();

        if($projectVisible == null) {
            abort(404);
        }

        return view('portfolio.project-article', [
            'project' => $projectVisible,
        ]);
    }

}
