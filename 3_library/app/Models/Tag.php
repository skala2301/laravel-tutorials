<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;


    public function jobs()
    {
        //to prevent colision with predefined table jobs we specify the relatedPivotKey: 'job_listing_id'
        //in this case we use relatedPivotKey because we are refering to the key which represents jobs listing
        //which is the related to tags in the pivot table job_tag check the related migration for reference
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    }
}
