<?php

namespace App\Utils;

use App\Constants\RespondCode;
use App\Exception\AuthException;
use Firebase\JWT\JWT;
use Hyperf\Config\Annotation\Value;

class Auth
{

    public static function encode($data)
    {
        $payload = array(
            "exp" => time() + config('jwt.expire'),
            "data" => $data
        );
        return JWT::encode($payload, config('jwt.key'));
    }

    public static function decode($token)
    {
        try {
            return JWT::decode($token, config('jwt.key'), array('HS256'));
        } catch (\Exception $e) {
            throw new AuthException(RespondCode::getMessage(RespondCode::AUTH_FAIL), RespondCode::AUTH_FAIL);
        }
    }
}