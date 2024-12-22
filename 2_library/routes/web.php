<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $jobs = Job::all();
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