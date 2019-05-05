<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectController extends Controller
{
    public function index()
      {
        $projects = '[{"id":2,"name":"hello","description":"gy","is_completed":0,"created_at":"2019-05-04 21:00:20","updated_at":"2019-05-04 21:00:20","tasks_count":0},{"id":1,"name":"myproject","description":"testing123","is_completed":0,"created_at":"2019-05-04 08:41:33","updated_at":"2019-05-04 08:41:33","tasks_count":3}]';
        /* $projects = Project::where('is_completed', false)
                            ->orderBy('created_at', 'desc')
                            ->withCount(['tasks' => function ($query) {
                              $query->where('is_completed', false);
                            }])
                            ->get(); */
 
        return $projects;
      }

      public function store(Request $request)
      {
       /* $validatedData = $request->validate([
          'name' => 'required',
          'description' => 'required',
        ]);

        $project = Project::create([
          'name' => $validatedData['name'],
          'description' => $validatedData['description'],
        ]);*/

        return response()->json('Project created!');
      }

      public function show($id)
      {
        $project ='{"id":1,"name":"myproject","description":"testing123","is_completed":0,"created_at":"2019-05-04 08:41:33","updated_at":"2019-05-04 08:41:33","tasks":[{"id":1,"title":"t1","project_id":1,"is_completed":0,"created_at":"2019-05-04 08:41:42","updated_at":"2019-05-04 08:41:42"},{"id":2,"title":"t2","project_id":1,"is_completed":0,"created_at":"2019-05-04 08:41:46","updated_at":"2019-05-04 08:41:46"},{"id":3,"title":"t3","project_id":1,"is_completed":0,"created_at":"2019-05-04 08:41:50","updated_at":"2019-05-04 08:41:50"}]}' 
        ;/*Project::with(['tasks' => function ($query) {
          $query->where('is_completed', false);
        }])->find($id);*/

        return $project; //->toJson();
      }

      public function markAsCompleted(Project $project)
      {
       /* $project->is_completed = true;
        $project->update();*/

        return response()->json('Project updated!');
      }
}
