<?php

namespace App\Http\Controllers;

use App\Models\WorkType;
use Illuminate\Http\Request;

class WorkTypeController extends Controller
{


    protected array $rules = [
        'name' => 'required|min:3|max:255',
        'description' => 'nullable',
    ];
    protected array $messages = [
        'name'.'min' => 'The name must be at least 3 characters.',
        'required' => 'The :attribute field is required.',
    ];


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('work_types.index', ['workTypes' => WorkType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('work_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules); // validated
        try {
            $type = new WorkType($validated);
            $type->save();
            return redirect(route('types.create'))->with('success', "Type created successfully [#$type->id]");
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(WorkType $type)
    {
        return view('work_types.show', ['type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkType $type)
    {
        return view('work_types.edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkType $type)
    {
        $validated = $request->validate($this->rules, $this->messages); // validated
        try {
            $type->update($validated);
            $type->save();
            session()->put(['success' => "Type updated successfully"]);
            return redirect(route('types.show',$type));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkType $type)
    {
        $type->delete();
        return redirect()->route('types.index');
    }
}
