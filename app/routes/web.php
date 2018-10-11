<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 1:51
 */
Route::get('/about', '\Smartbro\Controllers\frontend\CustomPageController@about');
Route::get('/404', '\Smartbro\Controllers\frontend\CustomPageController@error');
Route::get('/product','\Smartbro\Controllers\frontend\ProductsController@view');
Route::get('/switch-language/{lang?}', '\Smartbro\Controllers\frontend\CustomPageController@switch_language')->name('switch_language');
Route::get('/term', '\Smartbro\Controllers\frontend\CustomPageController@term');
Route::get('/return', '\Smartbro\Controllers\frontend\CustomPageController@return');
Route::get('/sitemap',function(){
    return response()->view(_get_frontend_theme_path('pages.sitemap'))
        ->header('Content-Type', 'xml');
});