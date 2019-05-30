<?php


                    

Route::PUT('/edit-poll/{id}', 'PagesController@editPollPost' )->name('editPollPost')->middleware('auth');
Route::get('/edit-poll/{id}', 'PagesController@EditPoll' )->name('EditPoll')->middleware('auth');

Route::delete('/my-polls/{id}', 'PagesController@PollDestroy')->name('PollDestroy')->middleware('auth');

Route::post('/show-poll/{id}', 'PagesController@voteNow')->name('voteNow');
Route::post('/create-poll', 'PagesController@postPoll')->name('SubmitPoll')->middleware('auth');

Route::get('/show-poll/{id}', 'PagesController@showPoll')->name('ShowPoll');
Route::get('/my-polls', 'PagesController@getMyPolls')->name('MyPolls')->middleware('auth');
Route::get('/create-poll', 'PagesController@getCreatePoll')->name('CreatePoll')->middleware('auth');
Route::get('/about', 'PagesController@getAbout')->name('about');
Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::get('/all-polls', 'PagesController@getAllPolls')->name('allPolls');
Route::get('/successful-vote', 'PagesController@getSuccessfulVote')->name('SuccessfulVote');
Route::get('/terms-conditions', 'PagesController@getTermsConditions')->name('TermsConditions');
Route::get('/privacy-policy', 'PagesController@getPrivacyPolicy')->name('PrivacyPolicy');
Route::get('/', 'PagesController@getWelcome')->name('welcome');
Route::post('/contact', 'PagesController@postContact')->name('contact.post');


Auth::routes();
Route::get('404',['as'=>'404','uses'=>'PagesController@errorCode404']);
Route::get('405',['as'=>'405','uses'=>'PagesController@errorCode405']);