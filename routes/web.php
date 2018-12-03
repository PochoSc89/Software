<?php
Route::get('/',['as'=>'Dashboard','uses'=> 'PagesController@Dashboard']);

Route::get('Soporte', ['as'=>'Soporte', function()
{
  return View('Soporte');
}]);
Route::get('Stock', ['as'=>'Producto', function()
{
  return View('Stock');
}]);
Route::get('Informacion', ['as'=>'Informacion', function()
{
  return View('Informes');
}]);
Route::get('Users', ['as'=>'PanelControl', function()
{
  return View('PanelControl');
}]);
