<?php
namespace App\Models;

/**
 * Class Leavetype
 * @package App\Models
 */
class Leavetype extends \Eloquent
{

    // Don't forget to fill this array
//    protected $fillable = ['leaveType', 'num_of_leave'];

    public function leavetype()
    {
        return $this->belongsto(Leavetype::class, 'leaveType', 'id');
    }

}
