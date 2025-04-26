<?php

namespace App\Http\Controllers;

use App\Models\PasswordReset;
use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    public function index()
    {
        $passwordResets = PasswordReset::all();
        return view('password_resets.index', compact('passwordResets'));
    }
}
