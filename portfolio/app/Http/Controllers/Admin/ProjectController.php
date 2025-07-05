<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view("projects.index", compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // prendo le categorie
        $categories = Category::all();

        return view('projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $categories = Category::all();
        $newProject = new Project();

        $newProject->title = $data['title'];
        $newProject->client = $data['client'];
        $newProject->period = $data['period'];
        $newProject->content = $data['content'];
        $newProject->category_id = $data['category_id'];

        $newProject->save();

        return redirect()->route('projects.show', $newProject->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // prendiamo project con id specifico

        // $project = Project::where('id', $id)->first();
        // $project = Project::find($id);

        // dd($project->category);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->title = $data['title'];
        $project->client = $data['client'];
        $project->period = $data['period'];
        $project->content = $data['content'];
        $project->category_id = $data['category_id'];

        $project->update();

        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
