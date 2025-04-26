<?php

namespace App\Http\Controllers;

use App\Models\ContactTag;
use Illuminate\Http\Request;

class ContactTagController extends Controller
{
    public function index()
    {
        $contactTags = ContactTag::all();
        return view('contact_tags.index', compact('contactTags'));
    }

    public function create()
    {
        return view('contact_tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'contact_id' => 'required|integer',
            'tag_id' => 'required|integer',
        ]);

        ContactTag::create($request->all());

        return redirect()->route('contact_tags.index')->with('success', 'ContactTag created successfully.');
    }

    public function edit($id)
    {
        $contactTag = ContactTag::findOrFail($id);
        return view('contact_tags.edit', compact('contactTag'));
    }

    public function update(Request $request, $id)
    {
        $contactTag = ContactTag::findOrFail($id);

        $request->validate([
            'contact_id' => 'required|integer',
            'tag_id' => 'required|integer',
        ]);

        $contactTag->update($request->all());

        return redirect()->route('contact_tags.index')->with('success', 'ContactTag updated successfully.');
    }

    public function destroy($id)
    {
        $contactTag = ContactTag::findOrFail($id);
        $contactTag->delete();

        return redirect()->route('contact_tags.index')->with('success', 'ContactTag deleted successfully.');
    }
}
