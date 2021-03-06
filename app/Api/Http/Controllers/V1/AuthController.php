<?php

namespace Flashtag\Api\Http\Controllers\V1;

use Auth;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    /**
     * @var \Tymon\JWTAuth\JWTAuth
     */
    private $jwt;

    /**
     * @param \Tymon\JWTAuth\JWTAuth $jwt
     */
    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    /**
     * @param Request $request
     * @return false|\Tymon\JWTAuth\Contracts\JWTSubject
     * @throws JWTException
     */
    public function me(Request $request)
    {
        if (Auth::check()) {
            return Auth::user();
        }

        return $this->jwt->parseToken()->authenticate();
    }

    public function logout(Request $request)
    {

    }

    /**
     * Authenticate the user to get a token.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticate(Request $request)
    {
        try {
            if (Auth::check()) {
                $token = $this->jwt->fromUser(Auth::user());
            } else {
                $credentials = $request->only('email', 'password');
                if (! $token = $this->jwt->attempt($credentials)) {
                    return response()->json(['error' => 'invalid_credentials'], 401);
                }
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }
}
