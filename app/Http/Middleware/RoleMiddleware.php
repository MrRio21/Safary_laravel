<?php

namespace App\Http\Middleware;

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
        $user = $request->user();
        // dd($user->hasRole($user->role_id));
        if (! Auth::check()) {
            return redirect('/login');
        }
        $userRole =DB::table('roles')
        ->join('users',function(JoinClause $join,Request $request){
            $user = $request->user();
            $join->on('roles.id','=','users.role_id')
            ->where('roles.id','=' ,$user->role_id);
        })->limit(1)->get();
        dd($userRole);
        if (! $user->hasRole($role)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
