<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemRole extends Model
{
    use HasFactory;


    public function systemuser(){
        return $this->hasMany(SystemUser::class);
    }
}
