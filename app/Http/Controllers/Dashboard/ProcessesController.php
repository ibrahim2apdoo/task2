<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProcessRequest;
use App\Models\Process;
use Illuminate\Support\Carbon;

class ProcessesController extends Controller
{
    private $process;

    public function __construct(Process $process)
    {
        $this->middleware(['permission:read-processes'])->only('index', 'show');
        $this->middleware(['permission:create-processes'])->only('create', 'store');
        $this->middleware(['permission:update-processes'])->only('edit', 'update');
        $this->middleware(['permission:delete-processes'])->only('destroy');
        $this->process = $process;
    }

    public function index()
    {
        try {
            $processes = $this->process->latest('id')->get();
            return view('admin.processes.index', compact('processes'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.processes.create');
    }

    public function store(ProcessRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $this->process->create($requested_data);


            return redirect()->route('processes.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Process $process)
    {
        return view('admin.processes.show', compact('process'));
    }

    public function edit(Process $process)
    {
        return view('admin.processes.edit', compact('process'));
    }

    public function update(ProcessRequest $request, Process $process)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $requested_data['updated_at'] = Carbon::now();
            $process->update($requested_data);

            return redirect()->route('processes.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Process $process)
    {
        try {
            $process->delete();
            return redirect()->route('processes.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
