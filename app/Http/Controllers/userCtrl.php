<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userCtrl extends Controller
{
    function ListAllUser(){
        $user = User::paginate(5);
        return view('User.userList', ['users' => $user]);
    }

    function DeleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/userList');
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
