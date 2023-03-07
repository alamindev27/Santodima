<?php

namespace App\Http\Controllers\Amdin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminTaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'DESC')->paginate('2');
        return view('admin.task.index', compact('tasks'));
    }

    public function create()
    {
        return view('admin.task.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);
        $file = $request->file('file');
        $fileName = time().Str::random(10).'.'.$file->getClientOriginalExtension();
        $path = 'file/';
        $request->file->move($path, $fileName);

        Task::insert([
            'file' => $path.$fileName,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Added Successfully');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        unlink(public_path($task->file));
        $task->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
