<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index () {
        $projects = Project::all();

        return view ('admin.projects.index', compact('projects'));
    }

    public function show (Project $project) {

        return view('admin.projects.show', compact('project'));
    }

    public function create () {
        return view('admin.projects.create');
    }

    public function store (Request $request) {
        //dd($request);

        $data = $request;

        $newProject = new Project();

        $newProject->name = $data['name'];
        $newProject->members = $data['members'];
        $newProject->description = $data['description'];
        $newProject->save();

        return redirect()->route('admin.projects.show', $newProject->id);
    }

    public function edit (Project $project) {

        return view('admin.projects.edit', compact('project'));
    }

    public function update (Request $request, Project $project) {
        $formData = $request->all();

        $project->name = $formData['name'];
        $project->members = $formData['members'];
        $project->description = $formData['description'];
        $project->update();

        return redirect()->route('admin.projects.show', $project);
    }

    public function destroy (Project $project) {

        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}