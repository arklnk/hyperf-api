<?php
declare(strict_types=1);
namespace App\Utils;

use App\Constants\RespondCode;
use App\Exception\BusinessException;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

/**
 * 验证码工具类
 */
class Captcha
{
    public static function create(): array
    {
        $phraseBuilder = new PhraseBuilder(4, '123456789');
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $builder->setIgnoreAllEffects(true);
        $builder->build();
        $id = uniqid('', false);
        return ['id' => $id, 'img' => $builder];
    }

    public static function check($id, $verify)
    {
        $code = SysRedis::getInstance()->get($id);
        if ($verify !== $code) {
            throw new BusinessException(RespondCode::getMessage(RespondCode::CAPTCHA_ERROR), RespondCode::CAPTCHA_ERROR);
        }
    }

}