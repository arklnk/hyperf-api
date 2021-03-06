<?php

declare (strict_types=1);

namespace App\Model;

/**
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 * @property int $department_id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $nick_name
 * @property string $head_img
 * @property string $email
 * @property string $phone
 * @property string $remark
 * @property string $psalt
 * @property int $status
 */
class SysUser extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sys_user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime', 'id' => 'integer', 'department_id' => 'integer', 'status' => 'integer'];
}