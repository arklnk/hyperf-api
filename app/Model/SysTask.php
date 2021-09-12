<?php

declare (strict_types=1);

namespace App\Model;

/**
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 * @property string $name
 * @property string $service
 * @property int $type
 * @property int $status
 * @property string $start_time
 * @property string $end_time
 * @property int $limit
 * @property string $cron
 * @property int $every
 * @property string $data
 * @property string $job_opts
 * @property string $remark
 */
class SysTask extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sys_task';
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
    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime', 'id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'limit' => 'integer', 'every' => 'integer'];
}