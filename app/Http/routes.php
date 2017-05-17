<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'home','uses'=>'WelcomeController@index']);
Route::get('/404',function(){
	return view('admin.error.404');
});
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('auth/login',['as' => 'login','uses'=>'Auth\AuthController@getLogin']);
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
	Route::get('/',['as' => 'admin.cate.getList','uses'=>'CateController@getList']);
    #category
	Route::group(['prefix' => 'cate'], function(){
		Route::get('list',['as' => 'admin.cate.getList','uses'=>'CateController@getList']);
		Route::get('add',['as' => 'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as' => 'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('delete/{id}',['as' => 'admin.cate.getDelete','uses'=>'CateController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.cate.postEdit','uses'=>'CateController@postEdit']);
		Route::get('search',['as'=>'admin.cate.getSearch','uses'=>'CateController@getSearch']);
	});

    #product
	Route::group(['prefix' => 'product'] ,function(){
		Route::get('list',['as' => 'admin.product.getList','uses'=>'ProductController@getList']);
		Route::get('add',['as' => 'admin.product.getAdd' , 'uses'=>'ProductController@getAdd']);
		Route::post('add',['as' => 'admin.product.postAdd' , 'uses'=>'ProductController@postAdd']);
      	Route::get('delete/{id}',['as' => 'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.product.postEdit','uses'=>'ProductController@postEdit']);
		Route::get('delimg/{id}',['as' => 'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
	});

    #user
    Route::group(['prefix' => 'user'] ,function(){
        Route::get('list',['as' => 'admin.user.getList','uses'=>'UserController@getList']);
        Route::get('add',['as' => 'admin.user.getAdd' , 'uses'=>'UserController@getAdd']);
        Route::post('add',['as' => 'admin.user.postAdd' , 'uses'=>'UserController@postAdd']);
        Route::get('delete/{id}',['as' => 'admin.user.getDelete','uses'=>'UserController@getDelete']);
        Route::get('edit/{id}',['as' => 'admin.user.getEdit','uses'=>'UserController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.user.postEdit','uses'=>'UserController@postEdit']);
    });

    #Brand
    Route::group(['prefix' => 'brand'] ,function(){
        Route::get('list',['as' => 'admin.brand.getList','uses'=>'BrandController@getList']);
        Route::get('add',['as' => 'admin.brand.getAdd' , 'uses'=>'BrandController@getAdd']);
        Route::post('add',['as' => 'admin.brand.postAdd' , 'uses'=>'BrandController@postAdd']);
        Route::get('delete/{id}',['as' => 'admin.brand.getDelete','uses'=>'BrandController@getDelete']);
        Route::get('edit/{id}',['as' => 'admin.brand.getEdit','uses'=>'BrandController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.brand.postEdit','uses'=>'BrandController@postEdit']);
    });

    #Color
    Route::group(['prefix' => 'color'] ,function(){
        Route::get('list',['as' => 'admin.color.getList','uses'=>'ColorController@getList']);
        Route::get('add',['as' => 'admin.color.getAdd' , 'uses'=>'ColorController@getAdd']);
        Route::post('add',['as' => 'admin.color.postAdd' , 'uses'=>'ColorController@postAdd']);
        Route::get('delete/{id}',['as' => 'admin.color.getDelete','uses'=>'ColorController@getDelete']);
        Route::get('edit/{id}',['as' => 'admin.color.getEdit','uses'=>'ColorController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.color.postEdit','uses'=>'ColorController@postEdit']);
    });

    #Made in
    Route::group(['prefix' => 'madein'] ,function(){
        Route::get('list',['as' => 'admin.madein.getList','uses'=>'MadeinController@getList']);
        Route::get('add',['as' => 'admin.madein.getAdd' , 'uses'=>'MadeinController@getAdd']);
        Route::post('add',['as' => 'admin.madein.postAdd' , 'uses'=>'MadeinController@postAdd']);
        Route::get('delete/{id}',['as' => 'admin.madein.getDelete','uses'=>'MadeinController@getDelete']);
        Route::get('edit/{id}',['as' => 'admin.madein.getEdit','uses'=>'MadeinController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.madein.postEdit','uses'=>'MadeinController@postEdit']);
    });

    #Material
    Route::group(['prefix' => 'material'] ,function(){
        Route::get('list',['as' => 'admin.material.getList','uses'=>'MaterialController@getList']);
        Route::get('add',['as' => 'admin.material.getAdd' , 'uses'=>'MaterialController@getAdd']);
        Route::post('add',['as' => 'admin.material.postAdd' , 'uses'=>'MaterialController@postAdd']);
        Route::get('delete/{id}',['as' => 'admin.material.getDelete','uses'=>'MaterialController@getDelete']);
        Route::get('edit/{id}',['as' => 'admin.material.getEdit','uses'=>'MaterialController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.material.postEdit','uses'=>'MaterialController@postEdit']);
    });

    #Sale
    Route::group(['prefix' => 'sale'] ,function(){
        Route::get('list',['as' => 'admin.sale.getList','uses'=>'SaleController@getList']);
        Route::get('add',['as' => 'admin.sale.getAdd' , 'uses'=>'SaleController@getAdd']);
        Route::post('add',['as' => 'admin.sale.postAdd' , 'uses'=>'SaleController@postAdd']);
        Route::get('delete/{id}',['as' => 'admin.sale.getDelete','uses'=>'SaleController@getDelete']);
        Route::get('edit/{id}',['as' => 'admin.sale.getEdit','uses'=>'SaleController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.sale.postEdit','uses'=>'SaleController@postEdit']);
    });

    #Type
    Route::group(['prefix' => 'type'] ,function(){
        Route::get('list',['as' => 'admin.type.getList','uses'=>'TypeController@getList']);
        Route::get('add',['as' => 'admin.type.getAdd' , 'uses'=>'TypeController@getAdd']);
        Route::post('add',['as' => 'admin.type.postAdd' , 'uses'=>'TypeController@postAdd']);
        Route::get('delete/{id}',['as' => 'admin.type.getDelete','uses'=>'TypeController@getDelete']);
        Route::get('edit/{id}',['as' => 'admin.type.getEdit','uses'=>'TypeController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.type.postEdit','uses'=>'TypeController@postEdit']);
    });

    #Transaction
    Route::group(['prefix' => 'transaction'] ,function(){
        Route::get('list',['as' => 'admin.transaction.getList','uses'=>'TransactionController@getList']);
        Route::get('delete/{id}',['as' => 'admin.transaction.getDelete','uses'=>'TransactionController@getDelete']);
        Route::get('notifyNew', 'TransactionController@newTransaction');
        Route::get('setIsViewed/{id}',['as' => 'admin.transaction.setIsViewed','uses'=>'TransactionController@setIsViewed']);
    });

    #Hoa don
	Route::group(['prefix' => 'trans'] ,function(){
		Route::get('list',['as' => 'admin.trans.getList','uses'=>'TransactionController@getTrans']);
		Route::get('delete/{id}',['as' => 'admin.trans.getDelete','uses'=>'TransactionController@getTransDelete']);
		Route::get('confirm/{id}',['as' => 'admin.trans.confirm','uses'=>'TransactionController@confirm']);
	});


    #Report
    Route::group(['prefix' => 'report'] ,function(){
        Route::get('tunover',['as' => 'admin.report.tunover','uses'=>'ReportController@tunover']);
        Route::get('/getturnover',['as' => 'admin.report.getturnover', 'uses' => 'ReportController@getturnover']);
    });
});

#FrontEnd

Route::get('loai-san-pham/{id}/{tenloai}',['as'=>'loaisanpham','uses'=>'WelcomeController@loaisanpham']);
Route::get('chi-tiet-san-pham/{id}/{tenloai}',['as'=>'chitietsanpham','uses'=>'WelcomeController@chitietsanpham']);
Route::get('lien-he',['as' => 'getLienhe','uses'=>'WelcomeController@get_lienhe']);
Route::post('lien-he',['as' => 'postLienhe','uses'=>'WelcomeController@post_lienhe']);
Route::get('mua-hang/{id}/{tensanpham}',['as'=>'muahang', 'uses' => 'WelcomeController@muahang']);
Route::get('gio-hang',['as'=>'giohang', 'uses' => 'WelcomeController@giohang']);
Route::get('xoa-san-pham/{id}',['as'=>'xoasanpham', 'uses' => 'WelcomeController@xoasanpham']);
Route::get('cap-nhat/{id}/{qty}',['as'=>'capnhat','uses'=>'WelcomeController@capnhat']);
Route::get('search-home',['as'=>'searchHome','uses'=>'WelcomeController@searchProduct']);
Route::get('order/checkout',['as'=>'checkout','uses'=>'OrderController@getCheckout']);
Route::post('order/checkout',['as'=>'checkout','uses'=>'OrderController@postCheckout']);
#Customer
Route::post('customer/login',['as' => 'customer.login' , 'uses'=>'CustomerController@login']);
Route::get('customer/logout',['as' => 'customer.logout' ,'uses'=>'CustomerController@logout']);
Route::get('customer/register',['as' => 'customer.register' ,'uses'=>'CustomerController@getRegister']);
Route::post('register',['as' => 'customer.post.register' ,'uses'=>'CustomerController@postRegister']);