<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //一篇帖子下有多条回复，新增 replies() 方法：
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

}
