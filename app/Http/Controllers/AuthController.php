<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthController extends Controller
{

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['invalid_email_or_password'], 422);
            }/*else{
                return response()->json(['Welcome To Creative Youth']);
            }*/
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        /*return response()->json(compact('token'));*/
        return response()->json(['message'=>'your token is','token'=>$token]);
    }
    public function getAuthUser(Request $request)
    {
        $user = JWTAuth::toUser($request->token);

        return response()->json(['result' => $user]);
    }

    public function tokenRefresh(Request $request)
    {
        try {
            $newToken = JWTAuth::setRequest($request)->parseToken()->refresh();
        } catch (TokenExpiredException $e) {
            event("jwt.expired", [$e], true);
        } catch (JWTException $e) {
            event("jwt.invalid", [$e], true);
        }

        /** Our Response wrapper :) */
       return ApiResponse::success([
            'token' => $newToken,
       ]);

       /* $token = JWTAuth::getToken();
        if(!$token){
            throw new BadRequestHtttpException('Token not provided');
        }
        try{
            $token = JWTAuth::refresh($token);
        }catch(TokenInvalidException $e){
            throw new AccessDeniedHttpException('The token is invalid');
        }
        return $this->response->withArray(['token'=>$token]);*/

    }
}
