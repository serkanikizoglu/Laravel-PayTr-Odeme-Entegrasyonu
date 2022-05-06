<?php

use Illuminate\Support\Facades\Route;

    Route::group(['prefix'=>'odeme'],function (){
        Route::get('/','OdemeController@index')->name('odeme.index'); // miktar ve müşteri bilgilreini alacağımız  formu getiriyoruz
        Route::post('/sonuc','OdemeController@odeme')->name('odeme.sonuc'); //ödeme formunu getiriyoruz.

        //Not:

        //bildirim url yi api.php den vereceğiz paytr bildirim url ye post atacağı wep.php de yaparsak csrf token engelince takılacaktır ve 419 hatası döndürecektir.
    });
