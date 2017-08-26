<?php

namespace App\Http\Middleware;

use Closure;

class CommunityAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $admin = JWTAuth::toUser($request->token);
        $role = UserRole::where('userid', $admin->id)
            ->take(1)
            ->get();
        /* print($role);die();*/
        if ($role[0]->roleid == 2) {
            return $next($request);
        }
    }
}
