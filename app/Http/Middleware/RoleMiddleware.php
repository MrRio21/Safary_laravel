<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $role)
    {
        $user = auth()->user();
        // dd($user->role_id);
        $id=$user->role_id;
        $test=Role::find($id);

        if ($test->name !=$role) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
