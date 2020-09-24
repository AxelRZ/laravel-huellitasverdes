<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return User::all();
    }

    public function query($id){
        return User::find($id);
    }
    public function queryrange($start,$end){

        return User::where('id','>=',$start)->where('id','<',$end)->get();


    }

    public function create(Request $request)
    {
        return User::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->update($request->all());

        return $User;
    }

    public function delete(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->delete();

        return 204;
    }

}
