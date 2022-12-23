<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchProjects(Request $request)
    {

        $pr_name = $request['pr_name'];
        if ($pr_name) {
            $task = DB::table('projects')->where('pr_name', 'Like', '%' . $pr_name . '%')->get();
            return $task;
        } else {
            $task = Project::all();
            return $task;
        }
    }
}
