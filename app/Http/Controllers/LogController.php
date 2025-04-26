<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::all();
        return view('logs.index', compact('logs'));
    }

    public function show($id)
    {
        $log = Log::findOrFail($id);
        return view('logs.show', compact('log'));
    }

    public function destroy($id)
    {
        $log = Log::findOrFail($id);
        $log->delete();

        return redirect()->route('logs.index')->with('success', 'Log deleted successfully.');
    }
}
