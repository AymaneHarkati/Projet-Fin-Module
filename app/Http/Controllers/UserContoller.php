<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        dd($id);
        User::where($id)->delete();
        return view('dashboard');
    }
}
