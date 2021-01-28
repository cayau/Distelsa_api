<?php
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Zona;

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

Route::get('departamentos', function() {
    return Departamento::all();
});

Route::get('get-municipios-by-departamentos/{id}', function($id) {
    return Municipio::where('departamento_id',$id)->get();
});

Route::get('get-zonas-by-departamento/{dep}/municipio/{mun}', function($dep, $mun) {
    return Zona::where('departamento', strtoupper($dep))
    ->where('municipio', strtoupper($mun))->get();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::fallback(function(){
    return response()->json([
        'success' => false,
        'response' => [
            'data' => [],
            'error' => [
                'field' => 'api_router',
                'code' => 'api_router_http_method_not_allowed_or_api_method_not_defined',
                'message' => 'API Router failure: HTTP Method not allow or API route not defined'
            ]
        ]
    ], 404);
});
