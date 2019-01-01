<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Seckill_Product extends Model
{
    protected $fillable=['start_at','end_at'];
    protected $dates=['start_at','end_at'];

    public $timestamps=false;

    public function product()
    {
        return $this->belongsTo(Product::class);
        
    }

    //定义一个名为 is_before_start 的访问器，当前时间早于秒杀时间返回true
    public function getIsBeforeStartAttribute()
    {
        return Carbon::now()->lt($this->start_at);
    }

    public function getIsAfterEndAttribute()
    {
        return Carbon::now()->gt($this->ent_at);
    }
}
