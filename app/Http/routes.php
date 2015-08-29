<?php


//Route::controller('/subject', 'SubjectController');
//Route::get('/', ['as' => 'home', 'uses' => 'PanelController@getIndex']);
Route::get('/panel/{subject}/delete', ['as' => 'subject.delete', 'uses' => 'PanelController@TimetableSubjectDelete']);
Route::get('/panel/{timetable}/delete', ['as' => 'timetable.delete', 'uses' => 'PanelController@TimetableDelete']);
//Route::delete('/delete/{id}',array('uses' => 'PanelController@delete', 'as' => 'subjects.delete'));
//Route::resource('subject', 'SubjectController');

Route::controller('/panel', 'PanelController');
Route::controller('/', 'PublicController');