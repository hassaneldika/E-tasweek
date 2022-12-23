<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{   //getting all services from database.
    public function index()
    {
        $task = DB::table('services');
        return $task->get();
    }
    //adding new service to database.
    public function store(Request $request)
    {


        $task = new Service;
        $task->se_name = $request->input('se_name');
        $task->se_description = $request->input('se_description');
        $task->isActive = $request->input('isActive');
        $task->save(); //storing values as an object
        return $task;
    }
    //updating service data.
    public function update(Request $request, $id)
    {
        $task = Service::findorFail($id);
        $inputTasks = $request->except(['_method', 'token']);
        $task->update($inputTasks);
        return $task;
    }
}
