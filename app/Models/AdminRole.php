<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminRole extends Model
{
    use SoftDeletes;
    public $table = 'admin_role';
    public $primaryKey = 'admin_role_id';
    public $fillable = ['role_name'];
    protected $guarded = [];
    public $timestamps = true;
    protected $dates = ['deleted_at'];
}
