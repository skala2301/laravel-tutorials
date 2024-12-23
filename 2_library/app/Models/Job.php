<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model{

    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
    ];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tags() {
        //to prevent colision with predefined table jobs we specify the foreignPivotKey: 'job_listing_id'
        //in this case we use foreignPivotKey because we are refering to the key which represents jobs listing
        //which is this model table in the pivot table job_tag check the related migration for reference
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
    
}