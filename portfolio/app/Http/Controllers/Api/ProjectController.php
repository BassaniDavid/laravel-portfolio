<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        // return "index API";

        // prendo i progetti dal db
        $projects = Project::with('Category', 'tags')->get();

        // dd($projects);


        return response()->json(
            [
                "sussess" => true,
                "data" => $projects
            ]
            );
    }

    public function show(Project $project) {
        // return "index API";

        // prendo i progetti dal db
        $project->load('category', 'tags');

        // dd($project);


        return response()->json(
            [
                "sussess" => true,
                "data" => $project
            ]
            );
    }



}
