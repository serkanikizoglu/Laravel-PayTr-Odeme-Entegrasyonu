<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 
    Route::group(['prefix'=>'odeme'],function (){
  
        Route::post('/bildirim','OdemeController@bildirim'); 

        // Bu örnekteki bildirim url: https://www.siteadiniz.com/odeme/bildirim







        // Diğer yol:
        // Sadece ödeme alacak ve başka bir işlem yaptıramyacaksanız Public içinde bildirim.php diye dosya atıp bildirim url yi https://www.siteadiniz.com/bildirim.php diye girebilirsiniz.



        // ÖNEMLİ NOT !!!!! 

        // Bildirim url ve sitenizin urlsindeki www https - http bilgilerinin doğru olduğuna emin olun.




    });
});
