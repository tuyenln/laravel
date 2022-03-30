<?php

use Illuminate\Support\Carbon;
use App\Reporters\OrderReporter;
use App\Reporters\OutputHtml;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});


Route::get('/reports/orders', function (Request $request){
    $from = $request->query('from')
    ? Carbon::createFromFormat('d-m-Y', $request->query('from'))
    : Carbon::now()->startOfMonth();

    $to = $request->query('to')
    ? Carbon::createFromFormat('d-m-Y', $request->query('to'))
    : Carbon::now()->endOfMonth();

    $orderReporter = new OrderReporter(new OrderRepository, new OutputHtml);
    $totalPrice = $orderReporter->between($from, $to);
    return $totalPrice;
});
