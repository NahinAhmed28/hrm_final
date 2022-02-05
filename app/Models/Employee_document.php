<?php
namespace App\Models;

/**
 * Class Employee_document
 * @package App\Models
 */
class Employee_document extends \Eloquent
{
    protected $fillable = [];
    protected $guarded = ['id'];

    protected $appends = ['document_url'];

    /**
     * @return mixed
     */
    public function employeeDetails()
    {
        return $this->belongsTo(Employee::class, 'employeeID', 'employeeID');
    }

}
