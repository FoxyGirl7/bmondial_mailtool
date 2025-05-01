<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $setting = Setting::where('user_id', $user->id)->first();

        return view('settings.index', compact('setting'));
    }

    public function edit()
    {
        $user = Auth::user();
        $setting = Setting::where('user_id', $user->id)->first();

        return view('settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'timezone' => 'required|string',
            'language' => 'required|string',
            'notifications_enabled' => 'required|boolean',
        ]);

        $user = Auth::user();
        $setting = Setting::updateOrCreate(
            ['user_id' => $user->id],
            $request->only(['timezone', 'language', 'notifications_enabled'])
        );

        return redirect()->route('settings.index')->with('success', 'Settings updated successfully.');
    }
}

