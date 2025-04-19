<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Middleware\PreventBackHistory;


Route::get('/', function () {
    if(Auth::guard('web')->check()){return redirect()->route('Dashboard');}
    else{return view('Application.Auth.Login');}
})->name('login')->middleware(PreventBackHistory::class);



Route::get('/addProduct', function (){
    return view('Application.Pages.AddProduct');
})->name('addProduct');

Route::get('/products', function (){
    return view('Application.Pages.Products');
})->name('products');

Route::get('/sales', function (){
    return view('Application.Pages.Sales');
})->name('sales');

Route::get('/expenses', function (){
    return view('Application.Pages.Expenses');
})->name('expenses');

Route::get('/expenseshistory', function (){
    return view('Application.Pages.ExpensesHistory');
})->name('expenseshistory');


Route::middleware(['auth:web'])->group( function() {
    Route::get('/main', function() {
        return view('Application.Layouts.Dashboard');
    })->name('Dashboard')->middleware(PreventBackHistory::class);
});


//Admin Controller
Route::post('/login', [AdminController::class , 'LoginAdmin'])->name('admin.login');
Route::post('/logout',[AdminController::class , 'LogoutAdmin'])->name('admin.logout');

//Admin Product Controller
Route::post('/create', [ProductController::class, 'addProduct'])->name('product.create');



// //Products Controller
// Route::post('/create', [ProductController::class, 'CreateProduct'])->name('product.create');
// Route::get('/products', [ProductController::class, 'GetAllProducts'])->name('product.get');
// Route::put('/EditProduct/{id}', [ProductController::class, 'GetProductById'])->name('product.get.single');
// Route::delete('/DeleteProduct/{id}', [ProductController::class, 'DeleteProduct'])->name('product.delete');
