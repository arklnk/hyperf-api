<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $id 
 * @property int $parent_id 
 * @property string $name 
 * @property string $router 
 * @property string $perms 
 * @property int $type 
 * @property string $icon 
 * @property int $order_num 
 * @property string $view_path 
 * @property int $keepalive 
 * @property int $is_show 
 */
class SysMenu extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sys_menu';
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
    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime', 'id' => 'integer', 'parent_id' => 'integer', 'type' => 'integer', 'order_num' => 'integer', 'keepalive' => 'integer', 'is_show' => 'integer'];
}