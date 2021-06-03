<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'cid', 'email', 'emp_id', 'dob', 'gender' , 'designation_id', 'position_id', 'agency_id', 'permenant_address', 'contact', 'employee_type', 'profile_uri', 'contact'
    ];

    public function designation(){
        return $this->belongsTo('App\Models\Designation');
    }

    public function position(){
        return $this->belongsTo('App\Models\Position');
    }

    public function agency(){
        return $this->belongsTo('App\Models\Agency');
    }
}
