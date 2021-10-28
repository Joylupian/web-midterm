<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\JoyController;
class JoyControllerAPI extends Controller
{
    public function index()
    {
        $joy = JoyController::all();

        return response()->json(['joy'=>$joy],200);
    }
}
