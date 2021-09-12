<?php
declare(strict_types=1);
namespace App\Exception\Handler;

use App\Exception\PermissionException;
use Hyperf\ExceptionHandler\ExceptionHandler;
use Psr\Http\Message\ResponseInterface;
use Throwable;

/**
 * 权限异常处理
 */
class PermissionExceptionHandler extends ExceptionHandler
{
    public function handle(Throwable $throwable, ResponseInterface $response)
    {
        $this->stopPropagation();

        // 业务逻辑
    }

    /**
     * 判断该异常处理器是否要对该异常进行处理
     */
    public function isValid(Throwable $throwable): bool
    {
        return $throwable instanceof PermissionException;
    }

}