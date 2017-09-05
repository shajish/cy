<?php

namespace App\Http\Middleware;

use App\Models\UserRole;
use Closure;
use JWTAuth;

class IsAdmin
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
        try{
        $admin = JWTAuth::toUser($request->token);
        $role = UserRole::where('userid', $admin->id)
            ->take(1)
            ->get();
        if ($role[0]->roleid == 1) {
            return $next($request);
        }
        }catch (\Exception $e) {
            return response()->json(['Not Admin'], $e->getMessage());
        }
    }


}
