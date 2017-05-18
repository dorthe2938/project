<?php

use App\Products;
use App\User;
use App\ShoppingLists;
use App\ProductsShoppinglists;

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('splash');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');


Route::get('/new_shoppinglist', function () {
    return view('newShoppinglist'); 
});

Route::post('/newShoppinglist', function(Request $request, User $user) {
    $shoppinglist = new Shoppinglists;
    $shoppinglist->name = $request->shoppinglistName;
    $shoppinglist->user_id = 1;
    $shoppinglist->save();
    
    $insertedId = $shoppinglist->id;
    $products = Products::orderBy('created_at', 'asc')->get();
    
    return view('createShoppinglist', compact(['insertedId', 'products']));
});

Route::post('/product', function(Request $request) {
    
    $products = Products::all();
    
    $productName = $request->productName;
    
    if($products->contains($productName)) {
        
        $add = new ProductsShoppinglists;
        $add->product_id = $products->id;
        $add->shoppingLists_id = $request->shoppinglistId;
        $add->save();

        return redirect('/create_shoppinglist');
    } else {
        echo 'error';
    }
    
    
});

Route::delete('/product/{id}', function($id) {
    Products::findOrFail($id)->delete();

    return redirect('/create_shoppinglist');
});



Route::get('/latest_shoppinglist', function () {
    return view('latestShoppinglist');
});