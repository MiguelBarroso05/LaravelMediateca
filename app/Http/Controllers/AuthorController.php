<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{


    protected array $rules = [
        'name' => 'required|min:3|max:255',
        'biography' => 'nullable',
        'image' => 'nullable',
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

        return view('authors.index', ['authors' => Author::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules); // validated
        try {
            $author = new Author($validated);
            $author->save();
            return redirect(route('author.create'))->with('success', "Author created successfully [#$author->id]");
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index');
    }
}
