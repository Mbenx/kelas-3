<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    // whitelist
    protected $fillable = ['name']; 
    
    // blacklist
    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    // created_at & updated_at tidak terpakai 
    // public $timestamps = false;
    
    public function position() {
        return $this->hasMany('App\Position');
    }
}
