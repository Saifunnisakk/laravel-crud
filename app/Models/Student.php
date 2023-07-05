<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'last_name', 'mobile', 'email', 'branch', 'address', 'additional_subjects'];

    public static $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'mobile' => 'required|string',
        'email' => 'required|email|unique:students,email',
        'branch' => 'required|string',
        'address' => 'required|string',
    ];

    protected $casts = [
        'additional_subjects' => 'array',
    ];
}
