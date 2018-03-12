<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    
	public function index($id)
	{
		$data = User::find($id);
		return view('profile', compact('data'));
	}

	public function editUser(Request $request, $id)
	{
		$user = User::select('password')->find($id);
		if(Hash::check($request['old_password'], $user->password )){
			User::find($id)->update($request->all());
		}else{
			
		}
		return redirect('/'. $id . '/profile');
	}

}
