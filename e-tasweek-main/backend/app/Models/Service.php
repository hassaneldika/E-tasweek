<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=["se_name","se_description","isActive"];


    public function project()
    {
        return $this->hasMany(Project::class, 'services_id');
    }
}
