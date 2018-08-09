<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //当我们创建完数据模型后，都需要设置 当前类的 的 $fillable 属性
     protected $fillable = [
        'name', 'description',
    ];
}
