<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    //getting all contact_us data from database.
    public function index()
    {
        $task = DB::table('contact_us');
        return $task->get();
    }

    //updating contact_us data.
    public function update(Request $request, $id)
    {
        $task = ContactUs::findorFail($id);
        $inputTasks = $request->except(['_method', 'token']);
        $task->update($inputTasks);
        return $task;
    }
}
