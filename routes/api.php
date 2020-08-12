<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('contact/create', 'Api\ContactController@createContact');
Route::get('contact/list', 'Api\ContactController@contactList');
Route::get('contact/{id}', 'Api\ContactController@contactInfo');
Route::post('contact/update/{id}', 'Api\ContactController@updateContact');
Route::get('contact/delete/{id}', 'Api\ContactController@deleteContact');
