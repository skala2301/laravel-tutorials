<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;
    
    public function jobs() {
        //To prevent colision here we explicitly refere to job_listing_id as the column
        return $this->hasMany(Job::class, 'job_listing_id');
    }
}
