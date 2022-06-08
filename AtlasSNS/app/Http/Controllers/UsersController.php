<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    public function search(){
         $users = User::get();

        return view('users.search',[
            'users'=> $users
        ]);
    }


     public function index(Request $request){

        $query = User::query();
         $search = $request->input('username');
          if (!empty($search)) {
            $query->where('username', 'like',"%{$search}%");}


            $users = $query->get();

            return view('users.search',[
                'users'=> $users
            ]);
}
}
