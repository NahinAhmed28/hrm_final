<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class Employee extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $guard = 'employee';


    // Don't forget to fill this array
    private static $faker;
    protected $fillable = ['employeeID','designation','fullName','fatherName','gender','email','password','date_of_birth','mobileNumber','localAddress','profileImage','joiningDate','permanentAddress'];
    protected $guarded = ['id'];

    protected $hidden = ['password'];
    protected $appends = ['profile_image_url'];
    protected $casts = ['date_of_birth' => 'date'];


    /**
     * @return mixed
     */
    public function getDesignation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Designation::class, 'designation', 'id');
    }

    /**
     * @return mixed
     */
    public function getDocuments()

    {
        return $this->hasMany(Employee_document::class, 'employeeID', 'employeeID');
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->hasOne(Salary::class, 'employeeID', 'employeeID');
    }

    /**
     * @return mixed
     */
    public function getAwards()
    {
        return $this->hasMany(Award::class, 'employeeID', 'employeeID')->select(['id','awardName','forMonth','forYear']);
    }

    /**
     * @return mixed
     */
    public function getBankDetail()
    {
        return $this->belongsTo(Bank_detail::class, 'employeeID', 'employeeID');
    }

    public function getAttendance()
    {
        return $this->hasMany(Attendance::class, 'employeeID', 'employeeID');
    }



    public function setFullNameAttribute($value){
        $this->attributes['fullName'] = ucwords(strtolower($value));
    }

    public function setFatherNameAttribute($value){
        $this->attributes['fatherName'] = ucwords(strtolower($value));
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = date('Y-m-d', strtotime($value));
    }

    public function setJoiningDateAttribute($value)
    {
        $this->attributes['joiningDate'] = date('Y-m-d', strtotime($value));
    }

}
