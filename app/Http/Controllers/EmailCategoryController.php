<?php

namespace App\Http\Controllers;

use App\Models\EmailCategory;
use Illuminate\Http\Request;

class EmailCategoryController extends Controller
{
    public function index()
    {
        $emailCategories = EmailCategory::all();
        return view('email_categories.index', compact('emailCategories'));
    }

    public function create()
    {
        return view('email_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        EmailCategory::create($request->all());

        return redirect()->route('email_categories.index')->with('success', 'EmailCategory created successfully.');
    }

    public function edit($id)
    {
        $emailCategory = EmailCategory::findOrFail($id);
        return view('email_categories.edit', compact('emailCategory'));
    }

    public function update(Request $request, $id)
    {
        $emailCategory = EmailCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $emailCategory->update($request->all());

        return redirect()->route('email_categories.index')->with('success', 'EmailCategory updated successfully.');
    }

    public function destroy($id)
    {
        $emailCategory = EmailCategory::findOrFail($id);
        $emailCategory->delete();

        return redirect()->route('email_categories.index')->with('success', 'EmailCategory deleted successfully.');
    }
}
