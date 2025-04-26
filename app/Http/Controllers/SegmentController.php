<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
    public function index()
    {
        $segments = Segment::all();
        return view('segments.index', compact('segments'));
    }

    public function create()
    {
        return view('segments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Segment::create($request->all());

        return redirect()->route('segments.index')->with('success', 'Segment created successfully.');
    }

    public function edit($id)
    {
        $segment = Segment::findOrFail($id);
        return view('segments.edit', compact('segment'));
    }

    public function update(Request $request, $id)
    {
        $segment = Segment::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $segment->update($request->all());

        return redirect()->route('segments.index')->with('success', 'Segment updated successfully.');
    }

    public function destroy($id)
    {
        $segment = Segment::findOrFail($id);
        $segment->delete();

        return redirect()->route('segments.index')->with('success', 'Segment deleted successfully.');
    }
}
