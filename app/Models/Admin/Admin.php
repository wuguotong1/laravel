<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 't_admin';       //表名
    protected $primaryKey = 'id';       //主键名
    public $incrementing = true;        //主键是否自增
    public $timestamps = false;         //是否自动维护时间戳



}
