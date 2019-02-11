<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    // whitelist
    protected $fillable = ['name','detail']; 
    
    // blacklist
    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    // created_at & updated_at tidak terpakai 
    //public $timestamps = false;
    
    public function archive() {
        return $this->hasOne('App\Archive');
    }

    public function employee()
    {
        return $this->belongsToMany('App\Employee');
    }
}
