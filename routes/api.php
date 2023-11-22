<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('projects', function() {
//     return [
//         'status' => 'success',
//         'result' => 'Ciao Apina'
//     ];
// });

Route::get('projects', function() {
    return response()->json([
    'status' => 'success',
    'result' => Project::with('category', 'tecnologies')-> paginate(4)
    ]);
    
});

Route::get('categories', function() {
    return response()->json([
    'status' => 'success',
    'result' => App\Models\Category::all()
    ]);
    
});

Route::get('tecnologies', function() {
    return response()->json([
    'status' => 'success',
    'result' => App\Models\Tecnology::all()
    ]);
    
});