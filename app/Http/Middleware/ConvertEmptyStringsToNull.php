<?php
// app/Http/Middleware/ConvertEmptyStringsToNull.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ConvertEmptyStringsToNull
{
    public function handle(Request $request, Closure $next)
    {
        $request->merge(array_map(function ($value) {
            return $value === '' ? null : $value;
        }, $request->all()));

        return $next($request);
    }
}
