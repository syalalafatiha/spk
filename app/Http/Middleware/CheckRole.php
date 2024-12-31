<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login page if not authenticated
        }

        $user = Auth::user();
        if ($user->role === $role) {
            return $next($request);
        }

        return response()->json(['message' => 'Anda tidak memiliki akses'], 403);
    }
}
