<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function store(Request $request)
      {
       /* $validatedData = $request->validate(['title' => 'required']);
 
        $task = Task::create([
          'title' => $validatedData['title'],
          'project_id' => $request->project_id,
        ]);*/
          $task='{"title":"3","project_id":1,"updated_at":"2019-05-05 09:25:23","created_at":"2019-05-05 09:25:23","id":4}';
        return $task;//->toJson();
      }

      public function markAsCompleted(Task $task)
      {
       /* $task->is_completed = true;
        $task->update();*/

        return response()->json('Task updated!');
      }
}
