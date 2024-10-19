<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

    public function doregister(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email|max:150',
            'password' => 'required|string|min:4',
            'phone' => 'required|numeric|min:8',
            'signas' => 'required|in:agency,customer,agent'
        ]);

        if($validation->passes())
        {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'signas' => $request->signas
            ]);

            return redirect()->route('login')->with('success','Inscription réussie');
        } else {
            return back()->withErrors($validation);
        }
    }
    public function login()
    {
        /*User::create([
            'name' => 'Johny',
            'email' => 'johny@do.fr',
            'password' => Hash::make('00000')
        ]); */
        return view('auth.login');
    }
    public function dologin(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email|max:150',
            'password' => 'required|string|min:4',
        ]);

        if($validation->passes())
        {
            $validation = Auth::attempt([
                'email'=> $request->email,
                'password'=> $request->password
            ]);

            $user = Auth::user();

            if($user->signas == 'user'){
                return redirect()->intended(route('admin.profile'));
            } /* elseif($user->signas == 'agent'){
                return redirect()->intended(route('auth.property.agent'));
            }elseif($user->signas == 'agency'){
                return redirect()->intended(route('auth.property.agency'));
            }*/
            //return redirect()->route('auth.login', $request->$token)->with('success','Inscription réussie');
            return redirect()->route('login')
                ->withErrors($validation)
                ->withInput($request->only('email'));
        }

        /*$credentials = $request->validated();
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.property.index'));
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects'
        ])->onlyInput('email');*/
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login')->with('success', 'Déconnecté');
    }

}
