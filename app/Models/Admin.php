<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;
    public $table = 'admin';
    public $primaryKey = 'admin_id';
    public $fillable = ['firstname','lastname','username','password','admin_role_id'];
    protected $guarded = [];
    public $timestamps = true;
    protected $dates = ['deleted_at'];

}
