<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RegisterRequest;
use App\Repositories\User\UserRepository;

class UserController extends Controller
{
    private $user;

    public function __construct(UserRepository $user)
    {
    	$this->user=$user;
    }
    public function getAllUsers(){
    	$users= $this->user->getAll();
    	//$editUser=(isset($id))? $this->user->getById($id):null;
    	return view('User.index', compact('users'));
    }

    public function postCreateUser(){
        return view('User.create');
    }
    public function postStoreUser(RegisterRequest $request){
    	$attributes=$request->all();
    	$this->user->create($attributes);
    	return redirect()->route('user.show')->with('status','A new student has been created !');
    }
    public function postShowUser(){
         $user = $this->user->show();
    return view('User.show', compact('user'));   
    }
    public function postEditUser($id){
        $user = $this->user->getById($id);
        return view('User.edit',compact('user'));
    }

    public function postUpdateUser($id, RegisterRequest $request){
        
    	$attributes=$request->all();
    	$this->user->update($id,$attributes);
    	return redirect()->route('user.index')->with('status','Profile has been updated !');
    }
    public function postDeleteUser($id){
    	$this->user->delete($id);
    	return redirect()->route('user.index');
    }
}
