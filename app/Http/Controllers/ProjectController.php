<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    // Display a listing of the resource.
    public function index()
    {
        //
    }

     // Show the form for creating a new resource.
    public function create()
    {
        //
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        //
    }


    // Display the specified resource.
    public function show(Project $project)
    {
        $projectVisible = Project::visibility($project->id)->get()->first();

        if($projectVisible == null) {
            abort(404);
        }

        // get project with the same category but not the current project
        $relatedProjects = Project::visibility()->where('category_id', $project->category_id)->where('id', '!=', $project->id)->get();

        return view('portfolio.project-article', [
            'project' => $projectVisible,
            'relatedProjects' => $relatedProjects,
        ]);
    }

    // Show the form for editing the specified resource.
    public function edit(Project $project)
    {
        //
    }

    // Update the specified resource in storage.
    public function update(Request $request, Project $project)
    {
        //
    }

    // Update the specified resource in storage.
    public function destroy(Project $project)
    {
        //
    }
}
