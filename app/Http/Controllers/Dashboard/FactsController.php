<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\FactRequest;
use App\Models\Fact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FactsController extends Controller
{
    private $fact;

    public function __construct(Fact $fact)
    {
        $this->middleware(['permission:read-facts'])->only('index', 'show');
        $this->middleware(['permission:create-facts'])->only('create', 'store');
        $this->middleware(['permission:update-facts'])->only('edit', 'update');
        $this->middleware(['permission:delete-facts'])->only('destroy');
        $this->fact = $fact;
    }

    public function index()
    {
        try {
            $facts = $this->fact->latest('id')->get();
            return view('admin.facts.index', compact('facts'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.facts.create');
    }

    public function store(FactRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $this->fact->create($requested_data);


            return redirect()->route('facts.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Fact $fact)
    {
        return view('admin.facts.show', compact('fact'));
    }

    public function edit(Fact $fact)
    {
        return view('admin.facts.edit', compact('fact'));
    }

    public function update(FactRequest $request, Fact $fact)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $requested_data['updated_at'] = Carbon::now();
            $fact->update($requested_data);

            return redirect()->route('facts.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Fact $fact)
    {
        try {
            $fact->delete();
            return redirect()->route('facts.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
