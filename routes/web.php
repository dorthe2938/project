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

Route::get('/terms_and_conditions', function () {
    return view('termsAndConditions'); 
});


Route::get('/create_shoppinglist', function () {
    return view('createShoppinglist'); 
});

Route::get('/latest_shoppinglist', function () {
    return view('latestShoppinglist');
});

Route::post('/newShoppinglist', function(Request $request) {
    $shoppinglist = new Shoppinglists;
    $shoppinglist->name = $request->shoppinglistName;
    $shoppinglist->user_id = 1;
    $shoppinglist->save();
    
    $insertedId = $shoppinglist->id;
    
    $shoppinglist = ProductsShoppinglists::where('shoppingLists_id', $insertedId)->get();
    $products = Products::orderBy('created_at', 'asc')->get();
        
        $shoppinglist = ProductsShoppinglists::where('shoppingLists_id', $insertedId)->get();
        $shoppinglist = $shoppinglist->pluck('product_id');
        
        $filteredProducts = $products->whereIn('id', $shoppinglist);
        
    
    return view('createShoppinglist', compact(['insertedId', 'filteredProducts', 'products']));
});

Route::post('/product', function(Request $request) {
    
    $product = $request->productName;
    $productId = preg_replace("/[^0-9]/","",$product);
    
        $add = new ProductsShoppinglists;
        $add->product_id = $productId;
        $add->shoppingLists_id = $request->shoppinglistId;
        $add->save();
        
        $insertedId = $request->shoppinglistId;
        $products = Products::orderBy('created_at', 'asc')->get();
        
        $shoppinglist = ProductsShoppinglists::where('shoppingLists_id', $insertedId)->get();
        $shoppinglist = $shoppinglist->pluck('product_id');
        
        $filteredProducts = $products->whereIn('id', $shoppinglist);

        return view('createShoppinglist', compact('insertedId', 'filteredProducts', 'products'));
});

Route::delete('/product/{id}', function($id, Request $request) {
    ProductsShoppinglists::where('product_id', $id)->delete();
    
    $insertedId = $request->shoppinglistId;
    $products = Products::orderBy('created_at', 'asc')->get();
    
    $shoppinglist = ProductsShoppinglists::where('shoppingLists_id', $insertedId)->get();
        $shoppinglist = $shoppinglist->pluck('product_id');
        
        $filteredProducts = $products->whereIn('id', $shoppinglist);
    
    return View('createShoppinglist', compact(['insertedId', 'filteredProducts', 'products']));
});