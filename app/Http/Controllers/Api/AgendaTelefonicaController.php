<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class AgendaTelefonicaController extends Controller
{
    public function HelthCheck(){
        return 'I am alive!';
    }

    public function Get(){
        $users = Users::all();
        if($users->count() > 0){
            return response()->json([
                'status' => 200,
                'Users' => $users
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'Users' =>'No Records Users'
            ], 404);
        }
    }
}
