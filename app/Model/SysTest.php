<?php

declare (strict_types=1);

namespace App\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $age
 */
class SysTest extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sys_test';
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
    protected $casts = ['id' => 'integer', 'age' => 'integer'];


}