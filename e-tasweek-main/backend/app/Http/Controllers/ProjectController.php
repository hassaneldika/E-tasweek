<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Database\Seeders\ProjectSeeder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Get All Projects and their reference Services
    /**
     * @return JsonResponse
     */
    //    public function index(): JsonResponse
    //    {
    //        $project = Project::with('service')->get();
    //        return response()->json($project);
    //    }

    // Get Project
    public function index(): JsonResponse
    {
        $project = Project::all();
        return response()->json($project);
    }

    //get Project By Id
    public function show($id): JsonResponse
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }

    //add project

  
    public function store(Request $request): JsonResponse
    {
        $project = new Project();
        $project->pr_name = $request->pr_name;
        $project->pr_link = $request->pr_link;
        $project->services_id = $request->services_id;
        $project->save();
        return response()->json(["message" => "Project Added Successfully"]);
    }

    // update project
    public function update(Request $request, $id): JsonResponse
    {
        $project = Project::findOrFail($id);
        $newInput = $request->except(['_method', 'token']);
        $project->update($newInput);
        return response()->json($project);
    }

    // delete project
    public function destroy($id): JsonResponse
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return response()->json(['Project' => "Project Deleted !!"]);
    }

    // update project
    public function update(Request $request, $id): JsonResponse
    {
        $project = Project::findOrFail($id);
        $newInput = $request->except(['_method', 'token']);
        $project->update($newInput);
        return response()->json($project);
    }

    // delete project
    public function destroy($id): JsonResponse
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return response()->json(['Project'=>"Project Deleted !!"]);
    }
}
