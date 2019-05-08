<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'],'password' => $data['password'],'admin' => ['1']])) {
                //echo "Bienvenido"; die;
                //Session::put('adminSession', $data['email']);
                return redirect('admin/inicio');
            }else {
                //echo "Acceso denegado"; die;
                return redirect('/admin')->with('flash_message_error','Correo o Contraseña Invalida');
            }
        }
        return view('admin.admin_login');
    }

    public function inicio(){
        /*if(Session::has('adminSession')){

        }else{
            return redirect('/admin')->with('flash_message_error','Ingresa tus datos para accesar');
        }*/
        return view ('admin.inicio');
    }

    public function settings(){
        return view ('admin.settings');
    }

    public function chkPassword( Request $request){
        $data = $request->all();
        $actual_password = $data['actual_password'];
        $check_password = User::where(['admin' =>'1'])->first();
        if(Hash::check($actual_password,$check_password->password)){
            echo ('True'); die;
        }else{
            echo('False'); die;
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Vuelva Pronto');
    }
}
