<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class School extends Model
{
    use HasFactory;
    /** 
     * 
     * 
     * @var array<int, string>
     * 
     * 
    */

    protected $fillable = [
        'school_name',
        'school_type',
        'cass',
    ];
}
