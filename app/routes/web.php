<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 1:51
 */
Route::get('/about', '\Smartbro\Controllers\frontend\CustomPageController@about');

Route::get('/product','\Smartbro\Controllers\frontend\ProductsController@view');
