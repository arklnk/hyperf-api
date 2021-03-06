<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'handler' => [
        'http' => [
            App\Exception\Handler\ParamExceptionHandler::class,
            App\Exception\Handler\BusinessExceptionHandler::class,
            App\Exception\Handler\AuthExceptionHandler::class,
            App\Exception\Handler\PermissionExceptionHandler::class,
            App\Exception\Handler\AppExceptionHandler::class,
        ],
    ],
];
