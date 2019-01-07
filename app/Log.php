<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['created_at'];
    public function employees()
    {
       return $this->belongsTo(\App\Models\Employees::class, 'employee_id', 'id');
    }
}
