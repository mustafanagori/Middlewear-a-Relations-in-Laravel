<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $primaryKey = 'id';
    use HasFactory;


    public function member()
    {
        return $this->hasMany('\App\Models\Members', 'group_id' ); 
    }
}
