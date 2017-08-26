<?php

namespace App\Http\Middleware;

use App\Models\UserRole;
use Closure;
use JWTAuth;

class user
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
        try {

            $user = JWTAuth::toUser($request->token);
            $role = UserRole::where('userid', $user->id)
                ->take(1)
                ->get();
            if ($role[0]->roleid == 3) {
                return $next($request);
            }
        } catch (\Exception $e) {
            return response()->json(['Not Authorize User'], $e->getMessage());
        }

    }
}
