<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function projectsIndex()
    {

        $projects = Project::all();

        return response()->json([
            'projects' => $projects
        ]);
    }

    public function projectsPagination()
    {

        $projects = Project::paginate(5);

        return response()->json([
            'projects' => $projects
        ]);
    }
}
