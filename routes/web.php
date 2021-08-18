<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/greeting', function () {
    echo 'Hello World!';
});

Route::get('/greeting/{name?}', function ($name = null) {
    if ($name) {
        echo 'Hello ' . $name . '!';
    } else {
        echo 'Hello World!';
    }
});


/**
 * Chuc nang dang nhap
 */
Route::get('/login', function () {
    return view('login.login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin' && $request->password == 'admin') {

        return view('login.welcome_admin');

    }

    return view('login.login_error');
});


/**
 * Chuc nang giam gia san pham
 */
Route::get('/calculator', function () {
    return view('product_discount.calculator');
});

Route::post('/calculator', function (\Illuminate\Http\Request $request) {
    $productDescription = $request->input('description');
    $listPrice = $request->input('list_price');
    $discountPercent = $request->input('discount_percent');
    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountPrice = $listPrice - $discountAmount;

    return view('product_discount.product_discount', compact('productDescription', 'listPrice', 'discountPercent', 'discountAmount', 'discountPrice'));
});


/**
 * Chuc nang tu dien don gian
 */
Route::get('/dictionary', function () {
    return view('dictionary.dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {
    $dictionary = [
        'pen' => 'cai but',
        'cai but' => 'pen',
        'book' => 'quyen sach',
        'quyen sach' => 'book',
        'phone' => 'dien thoai',
        'dien thoai' => 'phone'
    ];

    $english = $request->input('english');
    $flag = 0;

    foreach ($dictionary as $key => $discription) {
        if ($key == $english) {
            echo "Từ: " . $key . ".<br> Dịch ra có nghĩa là: " . $discription . ".";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra.";
    }

    return view('dictionary.dictionary');
});
