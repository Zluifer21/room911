<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
    public $fillable = ['firstname','lastname','employed_id','middlename','departament_id','access_room'];
    use SoftDeletes;
    public function departaments()
    {
       return $this->belongsTo(\App\Departament::class, 'departament_id', 'id');
    }
    public function logs()
   {
       return $this->hasMany('App\Log');
   }
}
