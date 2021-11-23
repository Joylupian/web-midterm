<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\JoyController;

class JoyPostController extends Controller
{
    public $successStatus = 200;

    public function getAllPosts(Request $request)
    {
        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $lists = DB::table('joy_resort')
        ->leftJoin('users','joy_resort.id', '=','users.id')
        ->select('joy_resort.id','joy_resort.location','joy_resort.price','joy_resort.foods','users.name','joy_resort.created_at','joy_resort.updated_at')
        ->get();
        return response()->json($lists,$this->successStatus);

    }

    public function getPost(Request $request)
    {

        $id = $request['pid']; //old post id

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $lists = JoyController::where('id',$id)->first();
            if($user != null){
                return response()->json($lists,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    // this method searches the country
    public function searchPost(Request $request)
    {

        $params = $request['p']; //p = params

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $inventory = JoyController::where('location','LIKE','%' .$params . '%')->GET();
            if($user != null){
                return response()->json($inventory,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }
}
