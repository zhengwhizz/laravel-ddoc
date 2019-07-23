<?php
    //权限管理
    Route::get('ddoc', ['as'=>'ddoc','uses'=>'Zhengwhizz\DDoc\Controllers\DDocController@index']);
    Route::get('ddoc/export/{type}', ['as'=>'ddoc.export','uses'=>'Zhengwhizz\DDoc\Controllers\DDocController@export']);
