<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $primaryKey = 'id';
    use HasFactory;

    public function group()
    {
        return $this->hasMany('\App\Models\Groups', 'id' , 'group_id'); ;
    }
}
