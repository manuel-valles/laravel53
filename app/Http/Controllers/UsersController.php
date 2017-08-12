<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function index(){
    	$users = User::Paginate(10);
    	// return $users;
    	return view('admin.users.index', compact('users'));
    }
}
