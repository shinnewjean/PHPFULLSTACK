<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

use App\Http\Controllers\ItemController;

// RESTful API 만드는 조건 (두 컴퓨터 시스템이 인터넷을 통해 정보를 안전하게 교환하기 위해 사용하는 인터페이스)
// 1) URL 패스를 명사 복수형 -> URL만 봤을때 어떤 처리를 하는지 모르게하기 위해
// 2) 어떤처리를 할지는 메소드 사용
// 3) 프론트와 통신 할때 데이터는 JSON으로 주고받을것 (프론트에서 보내오는 정보)(프론트에서 보내오는게 JSON이 아닌 경우도있지만 잘못된것같다.)
// 나머지는 RESTful API 를 검색하여 알아보기

Route::prefix('items')->group(function(){
    Route::get('/', [ItemController::class,'index']);
    Route::post('/', [ItemController::class,'store']);
    Route::put('/{id}', [ItemController::class,'update']);
    Route::delete('/{id}', [ItemController::class,'destroy']);
});