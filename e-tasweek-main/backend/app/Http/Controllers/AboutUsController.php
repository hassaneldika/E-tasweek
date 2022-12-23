<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    //getting all about_us data from database.
    public function index()
    {
        $task = DB::table('about_us');
        return $task->get();
    }
    //updating about_us data.
    public function update(Request $request, $id)
    {
        $task=AboutUs::findorFail($id);
       $inputTasks = $request->except(['_method', 'token']);
       $task->update($inputTasks);
        return $task;
    }
}
