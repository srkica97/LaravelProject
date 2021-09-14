<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menza extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'Student',
        'dorucak',
        'rucak',
        'vecera'
    ];

    public function Student(){
        return $this->hasMany(Student::class,'id','student');
    }
}
