<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    private function data(Request $request): array { return $request->validate(['task_name'=>'required|string|max:255','description'=>'nullable|string','status'=>'required|in:Pending,Completed','due_date'=>'required|date']); }
    public function index() { return view('tasks.index', ['tasks'=>Task::orderBy('due_date')->get()]); }
    public function create() { return view('tasks.create'); }
    public function store(Request $request) { Task::create($this->data($request)); return redirect()->route('tasks.index')->with('success','Task added successfully.'); }
    public function edit(Task $task) { return view('tasks.edit', compact('task')); }
    public function update(Request $request, Task $task) { $task->update($this->data($request)); return redirect()->route('tasks.index')->with('success','Task updated successfully.'); }
    public function updateStatus(Request $request, Task $task) { $request->validate(['status'=>'required|in:Pending,Completed']); $task->update(['status'=>$request->status]); return redirect()->route('tasks.index')->with('success','Status updated successfully.'); }
    public function destroy(Task $task) { $task->delete(); return redirect()->route('tasks.index')->with('success','Task deleted successfully.'); }
}
