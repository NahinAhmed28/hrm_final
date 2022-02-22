<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Attendance extends \Eloquent
{
    // Don't forget to fill this array
//    protected $fillable = [];

    protected $table = 'attendance';
    protected $guarded = ['id'];

    // Get employee Details

    /**
     * @return mixed
     */
    public function employeeDetails():BelongsTo
    {

        return $this->belongsTo(Employee::class, 'employeeID', 'employeeID');
    }


     }
