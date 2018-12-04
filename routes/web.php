<?php
Route::get('/',['as'=>'Dashboard','uses'=> 'PagesController@Dashboard']);

Route::get('Soporte', ['as'=>'Soporte','uses'=>'PagesController@Soporte']);
Route::get('Stock', ['as'=>'Producto', 'uses'=> 'PagesController@Stock']);
Route::get('Informacion', ['as'=>'Informacion', 'uses'=>'PagesController@Informes']);
Route::get('Users', ['as'=>'PanelControl','uses'=>'PagesController@PanelControl']);
