<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Requests\RegisterRequest;
use App\Repositories\User\UserRepository;

class UserController extends Controller
{
    private $user;
   

    //* construct with middleware
    public function __construct(UserRepository $user)
    {
        $this->middleware('auth');
    	$this->user=$user;
    }
    //* list student
    public function index(){
    	$users= $this->user->getAll();
    	//$editUser=(isset($id))? $this->user->getById($id):null;
    	return view('User.index', compact('users'));
    }

    //* create a student
    public function create($id=null){
        $editUser=(isset($id))? $this->user->getById($id):null;
        //print_r($editUser);die;
        return view('User.create', compact('editUser','id'));
    } 
    /* store a student */
    public function store(RegisterRequest $request){
    	$attributes=$request->all();
    	$this->user->create($attributes);
    	return redirect('users/show')->with('status','A new student has been created !');
    }
    /* show the student has created */
    public function show(){
         $user = $this->user->show();
    return view('User.show', compact('user'));   
    }
    // public function edit($id){
    //     $user = $this->user->getById($id);
    //     return view('User.edit',compact('user'));
    //}

    /* update student's infor */
    public function update($id, RegisterRequest $request){
        //print_r($request->all());die;
    	$attributes=$request->all();
    	$this->user->update($id,$attributes);
    	return redirect('users/users')->with('status','Profile has been updated !');
    }

    /*  delete a student*/
    public function destroy($id){
    	$this->user->delete($id);
    	return redirect()->back();
    }
}
        