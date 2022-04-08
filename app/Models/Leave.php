<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function leavetype()
    {
        return $this->hasone(Leave::class, 'id', 'leaveType');
    }

}
