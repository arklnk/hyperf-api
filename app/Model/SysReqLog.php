<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $id 
 * @property string $ip 
 * @property int $user_id 
 * @property string $params 
 * @property string $action 
 * @property string $method 
 * @property int $status 
 * @property int $consume_time 
 */
class SysReqLog extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sys_req_log';
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
    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime', 'id' => 'integer', 'user_id' => 'integer', 'status' => 'integer', 'consume_time' => 'integer'];
}