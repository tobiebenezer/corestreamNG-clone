<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $fillable =[
        'job_title',
        'num_available'
    ];

    //model relation to career application         
    public function career(){
        return $this->hasMany(CareerApplication::class);
    }
}
