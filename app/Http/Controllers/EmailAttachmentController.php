<?php

namespace App\Http\Controllers;

use App\Models\EmailAttachment;
use Illuminate\Http\Request;

class EmailAttachmentController extends Controller
{
    public function index()
    {
        $emailAttachments = EmailAttachment::all();
        return view('email_attachments.index', compact('emailAttachments'));
    }

    public function create()
    {
        return view('email_attachments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email_id' => 'required|integer',
            'file_path' => 'required|string|max:255',
        ]);

        EmailAttachment::create($request->all());

        return redirect()->route('email_attachments.index')->with('success', 'EmailAttachment created successfully.');
    }

    public function edit($id)
    {
        $emailAttachment = EmailAttachment::findOrFail($id);
        return view('email_attachments.edit', compact('emailAttachment'));
    }

    public function update(Request $request, $id)
    {
        $emailAttachment = EmailAttachment::findOrFail($id);

        $request->validate([
            'email_id' => 'required|integer',
            'file_path' => 'required|string|max:255',
        ]);

        $emailAttachment->update($request->all());

        return redirect()->route('email_attachments.index')->with('success', 'EmailAttachment updated successfully.');
    }

    public function destroy($id)
    {
        $emailAttachment = EmailAttachment::findOrFail($id);
        $emailAttachment->delete();

        return redirect()->route('email_attachments.index')->with('success', 'EmailAttachment deleted successfully.');
    }
}
