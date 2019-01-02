<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class index extends Model
{
    public $table='shop_user';
    public $timestamps=false; //声明不适用laravel的updated_at字段
}
