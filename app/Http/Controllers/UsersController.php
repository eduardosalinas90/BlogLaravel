<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

     public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index(){

        $users = User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index')->with('users',$users);
    }


    public function create(){

        return view('admin.users.create');
    }

    public function store(UserRequest $request){

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Usuario registrado de forma exitosa','Registro de Usuario')->success();

        return redirect()->route('admin.users.index');

    }

    public function destroy($id){

        $user = User::find($id);
        $user->delete();
        flash('Usuario eliminado de forma exitosa')->error();
        return redirect()->route('admin.users.index');
    }

      public function edit($id){

        $user = User::find($id);
        return view('admin.users.edit')->with('user',$user);
    }

     public function update(Request $request, $id){

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        flash('Usuario actualizado exitosamente')->success();
        return redirect()->route('admin.users.index');
    }


}
