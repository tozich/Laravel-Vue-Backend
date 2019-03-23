<?php

namespace App\Http\Controllers\Api\V1;

use App\Task;
use App\Http\Controllers\Controller;
use App\Http\Resources\Task as TaskResource;
use App\Http\Requests\Admin\StoreTasksRequest;
use App\Http\Requests\Admin\UpdateTasksRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class TasksController extends Controller
{
    public function index()
    {
        

        return new TaskResource(Task::with([])->get());
    }

    public function show($id)
    {
        if (Gate::denies('task_view')) {
            return abort(401);
        }

        $task = Task::with([])->findOrFail($id);

        return new TaskResource($task);
    }

    public function store(StoreTasksRequest $request)
    {
        if (Gate::denies('task_create')) {
            return abort(401);
        }

        $task = Task::create($request->all());
        
        

        return (new TaskResource($task))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateTasksRequest $request, $id)
    {
        if (Gate::denies('task_edit')) {
            return abort(401);
        }

        $task = Task::findOrFail($id);
        $task->update($request->all());
        
        
        

        return (new TaskResource($task))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('task_delete')) {
            return abort(401);
        }

        $task = Task::findOrFail($id);
        $task->delete();

        return response(null, 204);
    }
}
