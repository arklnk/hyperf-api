<?php
declare(strict_types=1);
namespace App\Utils;

use App\Constants\RespondCode;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * 请求响应工具类
 */
class Response
{
    /**
     * @Inject()
     * @var ResponseInterface
     */
    private $response;

    /**
     * @param $data
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function json($data)
    {
        return $this->response->json($data);
    }

    /**
     * @param array $data
     * @param string $msg
     * @param int $code
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function success(array $data = [], $message = 'success', $code = RespondCode::SUCCESS)
    {
        return $this->response->json([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ]);

    }

    /**
     * @param string $msg
     * @param int $code
     * @return mixed
     */
    public function fail($code = RespondCode::SERVER_ERROR, $message = '')
    {
        if (is_null($message)) {
            $message = RespondCode::getMessage($code);
        }
        return $this->response->withStatus(500)->json([
            'code' => $code,
            'message' => $message,
        ]);
    }

    /**
     * @param string $msg
     * @param int $code
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function error($code = RespondCode::ERROR, $message = '')
    {
        if (is_null($message)) {
            $message = RespondCode::getMessage($code);
        }
        return $this->response->json([
            'code' => $code,
            'message' => $message,
        ]);
    }
}