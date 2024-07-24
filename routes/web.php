<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pot;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\ProductController;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pot', function () {
    // truy vấn e rô quỳn
    // truy vấn lấy tất
    $data = Pot::all()->toArray();
    $data = Pot::query()->get();
    // where
    $data = Pot::query()->where('id', '>=', '1')->get();
    // thêm
    // c1
    // $pot = new Pot();
    // $pot->title = "bai viet so 2";
    // $pot->content = "Noi dung bai viet so 2";
    // $pot->save();
    // c2
    // $pot = Pot::query()->create([
    //     'title' => "bai viet so 3",
    //     'content' => "noi dung bai viet so 3"
    // ]);
    // sửa
    // c1
    // $pot = Pot::query()->find(2);
    // $pot->title = "bai viet so 21";
    // $pot->content = "Noi dung bai viet so 21";
    // $pot->save();
    // // c2
    // $pot = Pot::query()->find(2)->update([
    //     'title' => "bai viet so 32",
    //     'content' => "noi dung bai viet so 32"
    // ]);
    // xóa cứng
    // $pot = Pot::query()->find(2)->delete();
    // dd($data);
    // return view('welcome');
});
// Route::get('/products', [ProductController::class, 'index'])
// ->name('product.index');
// Route::post('/products/create', [ProductController::class, 'create'])
// ->name('product.create');

Route::controller(ProductController::class)
->name('product.')
->prefix('products/')
->group(function (){
    Route::get('/', 'index')
    ->name('index');
    Route::get('create', 'create')
    ->name('create');
    Route::post('store', 'store')
    ->name('store');
    Route::get('{id}/edit', 'edit')
    ->name('edit');
    Route::put('{id}/update', 'update')
    ->name('update');
    Route::delete('{id}/destroy', 'destroy')
    ->name('destroy');
});
