<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    //this is eager loading, you specify you are going to use the relation job-employer and make the sql request just once
    //if you dont specify with('employer'), when you request data from the view, you will force an sql request by
    //every time you ask for data related to employer from job, to experiment with lazy loading uncomment the line below
    //note that lazy loading is disable for now, enable it on AppServiceProvider
    //$jobs = Job::all(); 
    $jobs = Job::with('employer')->get(); 
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/job/{id}', function ($id) {

    $job = Job::find($id);

    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/contacts', function () {
    return view('contacts');
});