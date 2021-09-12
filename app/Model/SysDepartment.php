<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $id 
 * @property int $parend_id 
 * @property string $name 
 * @property int $order_num 
 */
class SysDepartment extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sys_department';
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
    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime', 'id' => 'integer', 'parend_id' => 'integer', 'order_num' => 'integer'];
}