<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        // $projects = Project::all();
        $projects = Project::with(['type', 'technologies'])->paginate(12);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($slug)
    {
        $project = Project::with(['type', 'technologies'])->where('slug', $slug)->first();
        if ($project) {
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        }

        return response()->json([
            'success' => false,
        ]);
    }
}
