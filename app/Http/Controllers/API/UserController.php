<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $json = $request->input('json',null);
        $params = json_decode($json);
        $prams_array = json_decode($json, true);

        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->save();
        $data = array(
            'User' => $User,
            'status' => 'success',
            'code' => 200
        );
        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::where('id',$id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //recoger parametros
        /* $json = $request->input('json',null);
        $params = json_decode($json);
        $prams_array = json_decode($json, true);
        //Validar datos
        $validate = \Validator::make($params_array,[
            'name' => 'required'
        ]);
        if($validate->fails()){
            return respose()->json($validate->errosr(),400);
        }
        //Actualizar cache
        unset($params_array['id']);
        unset($params_array['created_at']);

        $User = User::where('id',$id)->
        update(['name'=>$request->name]);

        $data = array(
            'User' => $User,
            'status' => 'success',
            'code' => 200
        );
        return response()->json($data, 200); */
       /*  User::where('id',$id)->
        update(['name'=>$request->name],
                ['email'=>$request->email]); */
                $user = User::find($id);
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    }
}
