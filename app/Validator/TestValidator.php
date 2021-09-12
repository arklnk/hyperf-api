<?php
declare(strict_types=1);
namespace App\Validator;

use App\Constants\RespondCode;
use App\Exception\BusinessException;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Validation\Contract\ValidatorFactoryInterface;

class TestValidator
{
    /**
     * @Inject()
     * @var ValidatorFactoryInterface
     */
    protected $validationFactory;

    /**
     * @Inject()
     * @var RequestInterface
     */
    protected $request;

    /**
     * 验证规则
     * @var array
     */
    protected $rule = [
        'id' => 'required',
        'name' => 'required',
    ];

    /**
     * 验证提示
     * @var array
     */
    protected $message = [
        'id.required' => 'id不能为空',
        'name.required' => '姓名不能为空',
    ];

    /**
     * 使用场景
     * @var array
     */
    protected $scene = [
        'add' => ['id', 'name'],
        'update' => ['name'],
    ];

    public function validate($scene = '*'):array
    {
        $rules = [];
        if ($scene === '*') {
            $rules = $this->rule;
        } else {
            $queue = $this->scene[$scene];
            foreach ($queue as $item) {
                $rules[$item] = $this->rule[$item];
            }
        }

        $validator = $this->validationFactory->make(
            $this->request->all(),
            $rules,
            $this->message
        );

        if ($validator->fails()) {
            throw new BusinessException($validator->errors()->first(), RespondCode::PARAM_ERROR);
        }
        return $validator->validated();
    }

}