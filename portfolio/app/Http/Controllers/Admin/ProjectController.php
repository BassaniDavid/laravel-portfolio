<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
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

        // prendo i tag
        $tags = Tag::all();

        return view('projects.create', compact('categories', 'tags'));
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

        // dopo aver salvato il post

        // controllo se ricevo tags
        if($request->has('tags')) {
            $newProject->tags()->attach($data['tags']);
        }


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
        // prendo i tag
        $tags = Tag::all();
        return view('projects.edit', compact('project', 'categories', 'tags'));
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

        // verifichiamo se stiamo ricevendo i tags
        if($request->has('tags')) {
            //SINCRONIZIAMO TAG CON TABELLA PIVOT
            $project->tags()->sync($data['tags']);
        }else{
            // se non riceviamo tags li eliminiamo tutti
            $project->tags()->detach();
        }

        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->tags()->detach();
        $project->delete();
        return redirect()->route('projects.index');
    }
}
