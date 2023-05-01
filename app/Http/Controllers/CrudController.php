<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;   


class CrudController extends Controller
{
    public function index()
    { 
       return view('create');
        
    }
    public function store(Request $request)
    {
       $request->validate([
        'firstname'=>'required|regex:/^[A-Z]+$/i',
        'lastname'=>'required|regex:/^[A-Z]+$/i',
        'image'=>'required|image|mimes:jpg,png',
        'username'=>'required|regex:/^[A-Z]+$/i',
        'address'=>'required',
        'city'=>'required',
        'state'=>'required',
        'zip'=>'required',
        'email'=>'required|regex:/^.+@.+$/i|email|unique:cruds,email',
        'password'=>['required','string',
        Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(3)
    ],
       ],[
       // 'firstname'=>'filled must'
       ]);


     $file=time() . '.' .request()->image->getClientOriginalExtension();
     request()->image->move(public_path('images'),$file);
//all image save public folder
        $user= new crud;
        $user->firstname=$request->input('firstname');
        $user->lastname=$request->input('lastname');
        $user->username=$request->input('username');
        $user->image=$file;
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->address=$request->input('address');
        $user->city=$request->input('city');
        $user->state=$request->input('state');
        $user->zip=$request->input('zip');

        $user->save();
        
        return ridirect('create');

    }
    
}
