<?php
declare(strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * 模型基类
 */
class BaseModel extends Model
{
    public function addItem($data)
    {
        self::insert($data);
    }

    public function deleteItem($where)
    {
        self::where($where)->delete();
    }

    public function getItem($where, $field = ['*'], $sort = [])
    {
        if (empty($sort)) {
            return self::formatData(self::where($where)->select(...$field)->get());
        } else {
            return self::formatData(self::where($where)->select(...$field)->orderBy(...$field)->get());
        }
    }

    public function updateItem($where, $data)
    {
        self::where($where)->update($data);
    }

    public function getAll($field = ['*'], $sort = [])
    {
        if (empty($sort)) {
            return self::formatData(self::select(...$field)->get());
        } else {
            return self::formatData(self::select(...$field)->orderBy(...$sort)->get());
        }
    }

    public function page($page, $limit, $field = ['*'],$order = [])
    {
        if (empty($sort)) {
            return self::formatData(self::forPage($page, $limit)->select(...$field)->get());
        } else {
            return self::formatData(self::forPage($page, $limit)->select(...$field)->orderBy(...$order)->get());
        }
    }

    protected function formatData($data)
    {
        if (!empty($data)) {
            return $data->toArray();
        } else {
            return [];
        }
    }
}