<?php
// app/Http/Middleware/CheckForMaintenanceMode.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class CheckForMaintenanceMode
{
    public function handle(Request $request, Closure $next)
    {
        if (App::isDownForMaintenance()) {
            return Response::view('errors.503', [], 503);
        }

        return $next($request);
    }
}
