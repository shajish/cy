<?php

namespace App\Http\Middleware;

use App\Models\UserRole;
use Closure;
use JWTAuth;

class Role
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
       /* print($role);die();*/
        if ($role[0]->roleid == 1) {
            return $next($request);
        }
        }catch (\Exception $e) {
            return response()->json(['Not Admin'], $e->getMessage());
        }
    }


}
