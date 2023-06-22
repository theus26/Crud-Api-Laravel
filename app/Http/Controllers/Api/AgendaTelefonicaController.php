<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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

    public function Post(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191' ,
            'email' => 'required|email|max:191',
            'dateNasc' => 'required|date',
            'CPF' => 'required|string|max:191',
            'phone' => 'required|digits:10'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'Errors' => $validator->messages()
            ], 400);
        }
        else{

            $users = Users::create([
                'name' => $request->name,
                'email' => $request->email,
                'dateNasc' => $request->dateNasc,
                'CPF' => $request->CPF,
                'phone' => $request->phone,
            ]);

            if($users){
                return response()->json([
                    'status' => 200,
                    'message' => 'Users Created Sucessfully'
                ],200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => 'Something when whrong!'
                ],500);
            }
        }
    }

    public function GetId($id){
        $users = Users::find($id);
        if($users){
            return response()->json([
                'status' => 200,
                'Users' => $users
            ],200);
        }else{
            return response()->json([
                'status' => 400,
                'message' => 'User dont find'
            ],400);
        }
    }

    public function edit($id){
        $users = Users::find($id);
        if($users){
            return response()->json([
                'status' => 200,
                'Users' => $users
            ],200);
        }else{
            return response()->json([
                'status' => 400,
                'message' => 'User dont find'
            ],400);
        }
    }

    public function update(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191' ,
            'email' => 'required|email|max:191',
            'dateNasc' => 'required|date',
            'CPF' => 'required|string|max:191',
            'phone' => 'required|digits:10'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'Errors' => $validator->messages()
            ], 400);
        }
        else{
            $users = Users::find($id);
           

            if($users){
                $users->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'dateNasc' => $request->dateNasc,
                    'CPF' => $request->CPF,
                    'phone' => $request->phone,
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => 'Users Updated Sucessfully'
                ],200);
            }else{
                return response()->json([
                    'status' => 400,
                    'message' => 'No such User Found !'
                ],400);
            }
        }
    }

    public function Delete($id){
        $users = Users::find($id);

        if($users){
            $users->delete();
        }
        else{
            return response()->json([
                'status' => 400,
                'message' => 'No delete User Found !'
            ],400);
        }
    }
}
