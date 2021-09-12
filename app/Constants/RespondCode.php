<?php

declare(strict_types=1);

namespace App\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants
 */
#[Constants]
class RespondCode extends AbstractConstants
{
    /**
     * @Message("Success")
     */
    const SUCCESS = 200;

    /**
     * @Message("Error")
     */
    const ERROR = 400;

    /**
     * @Message("Not Found")
     */
    const NOT_FOUND = 404;

    /**
     * @Message("Server Error!")
     */
    const SERVER_ERROR = 500;

    /*****************业务操作错误********************/

    /**
     * @Message("参数校验异常")
     */
    const PARAM_ERROR = 10000;

    /**
     * @Message("系统用户已存在")
     */
    const SYS_USER_EXIST =10001;

    /**
     * @Message("填写验证码有误")
     */
    const CAPTCHA_ERROR = 10002;

    /**
     * @Message("填用户名密码有误")
     */
    const ACCOUNT_ERROR = 10003;

    /**
     * @Message("节点路由已存在")
     */
    const ROUTE_EXIST = 10004;

    /**
     * @Message("权限必须包含父节点")
     */
    const PERMISSION_HAS_NOT_PARENT = 10005;

    /**
     * @Message("非法操作：该节点仅支持目录类型父节点")
     */
    const ROUTE_ONLY_DIR = 10006;

    /**
     * @Message("非法操作：节点类型无法直接转换")
     */
    const ROUTE_CANT_CHANGE = 10007;

    /**
     * @Message("该角色存在关联用户，请先删除关联用户")
     */
    const ROLE_EXIST_USER = 10008;

    /**
     * @Message("该部门存在关联用户，请先删除关联用户")
     */
    const DEPARTMENT_EXIST_USER = 10009;

    /**
     * @Message("该部门存在关联角色，请先删除关联角色")
     */
    const DEPARTMENT_EXIST_ROLE = 10010;

    /**
     * @Message("旧密码与原密码不一致")
     */
    const RESET_PWD_NOT_MATCH = 10011;

    /**
     * @Message("如想下线自身可右上角退出")
     */
    const LOGOUT_ERROR = 10012;

    /**
     * @Message("不允许下线该用户")
     */
    const LOGOUT_USER_ERROR = 10013;

    /**
     * @Message("父级菜单不存在")
     */
    const PARENT_MENU_NOT_EXIST = 10014;

    /**
     * @Message("该部门存在子部门，请先删除子部门")
     */
    const DEPARTMENT_EXIST_CHILD = 10015;

    /**
     * @Message("系统内置功能不允许操作")
     */
    const NOT_PERMISSION = 10016;

    /**
     * @Message("用户不存在")
     */
    const USER_NOT_EXIST = 10017;

    /**
     * @Message("无法查找当前用户所属部门")
     */
    const DEPARTMENT_SEARCH_ERROR = 10018;

    /**
     * @Message("部门不存在")
     */
    const DEPARTMENT_NOT_EXIST = 10019;

    /**
     * @Message("任务不存在")
     */
    const TASK_NOT_EXIST = 10020;

    /**
     * @Message("不安全的任务，确保执行的加入@Mission注解")
     */
    const TASK_UNSAFE = 10101;

    /**
     * @Message("所执行的任务不存在")
     */
    const EXEC_TASK_NOT_EXIST = 10102;

    /*****************token相关********************/

    /**
     * @Message("登录无效或无权限访问")
     */
    const AUTH_FAIL = 11001;

    /**
     * @Message("登录身份已过期")
     */
    const AUTH_EXPIRE = 11002;

    /**
     * @Message("无权限，请联系管理员申请权限")
     */
    const PERMISSION_DENIED = 11003;

}
