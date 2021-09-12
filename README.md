# Hyperf-Api


## 状态码

app/Constants/RespondCode.php

**获取状态码**

```
use App\Constants\RespondCode;
RespondCode::SUCCESS;
```

**获取状态码注解**

```
use App\Constants\RespondCode;
RespondCode::getMessage(RespondCode::SUCCESS);
```



## 控制器

为了方便统一API返回格式，创建的控制器统一继承BaseController，这样就可以使用：

> $this->response->success();
>
> $this->response->fail();
>
> $this->response->error();

来返回对应的API数据，使用如下：

```php
<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * @Controller(path="/")
 */
class IndexController extends BaseController
{
    /**
     * @RequestMapping(path="/",methods={"GET"})
     */
    public function index()
    {
        return $this->response->success();
    }
}
```



## 异常处理

**异常分类：**

登录异常、权限异常、参数异常、业务异常、应用异常

**如何抛异常**：

业务异常

```php
use App\Exception\BusinessException;
throw new BusinessException('业务异常',400);
```

登录异常

```php
use App\Exception\AuthException;
throw new AuthException('登录无效或无权限访问','11001');
```

权限异常

```php
use App\Exception\PermissionException;
throw new PermissionException('权限，请联系管理员申请权限','11003');
```

**如何处理异常：**

异常处理可分为：

> AppExceptionHandler.php
>
> AuthExceptionHandler.php
>
> BusinessExceptionHandler.php
>
> ParamExceptionHandler.php
>
> PermissionExceptionHandler.php



## 中间件

登录验证中间件、权限验证中间件、跨域中间件



## 模型

模型统一继承BaseModel，该基类提供了常用的业务操作

```php
<?php
declare(strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * 模型基类
 */
class BaseModel extends Model
{
    /**
    * 插入数据
    */
    public function addItem($data){}
    
    /**
    * 删除数据
    */
    public function deleteItem($where){}

    /**
    * 获取数据
    */
    public function getItem($where, $field = ['*'], $sort = []){}

    /**
    * 更新数据
    */
    public function updateItem($where, $data){}

    /**
    * 获取全部数据
    */
    public function getAll($field = ['*'], $sort = []){}

    /**
    * 分页获取数据
    */
    public function page($page, $limit, $field = ['*'],$order = []){}

    /**
    * 格式化数据
    */
    protected function formatData($data){}
}
```



## 工具类

登录验证、验证码、请求响应、系统日志、Redis



## 验证器

在hyperf验证器的基础上增加场景验证

