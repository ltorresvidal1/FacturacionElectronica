<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index() {
        return view('auth.login');
    }
/*
    public function store(StoreAuth $request){
     
        $credentials = $request->only('usuario', 'password');
        $credentials['idestado'] = 1;
      

        if (Auth::attempt($credentials)) {
            notify()->success('Bienvenido');
            return redirect()->route('principal');
        }else{
            notify()->error('Usuario o contreseña invalido');
            return back();
        }
}
*/


}
