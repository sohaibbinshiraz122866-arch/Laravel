<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_admission extends Model
{
    protected $table = 'student_admissions';

    protected $fillable = [
        'full_name',
        'email',
        'parent_name',
        'phone_number',
        'payment_method',
        'transaction_id',
        'amount',
        'address',
    ];
}
