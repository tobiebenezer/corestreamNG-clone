<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    use HasFactory;
    protected $fillable =['name',
            'email',
            'phone',
            'path_to_cv',
             'career_id'];

    //model relation to career         
    public function career(){
       return $this->belongsTo(Career::class);
    }
}
