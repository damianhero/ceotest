<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Clientes;

class ClientesController extends Controller
{
    public function addClientes(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $cliente = new Clientes;
            $cliente->nombre = $data['nombre'];
            $cliente->correo = $data['correo'];
            $cliente->sexo = $data['sexo'];
            $cliente->ocupacion = $data['ocupacion'];


            $cliente->save();
            return redirect('/admin/view_clientes')->with('flash_message_success','Cliente agregada con éxito');

        }
        return view('admin.clientes.add_clientes');
    }

    public function viewClientes(Request $request){
        $clientes = Clientes::get();
        return view('admin.clientes.view_clientes')->with(compact('clientes'));
    }

    public function editClientes(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            //Imagen
            Clientes::where(['id'=>$id])->update(['nombre'=>$data['nombre'],
            'correo'=>$data['correo'],'sexo'=>$data['sexo'],
            'ocupacion'=>$data['ocupacion']]);
            return redirect('/admin/view_clientes')->with('flash_message_success','Cliente actualizado con éxito');
        }
        $clienteDetalles = Clientes::where(['id'=>$id])->first();
        return view('admin.clientes.edit_clientes')->with(compact('clienteDetalles'));
    }


    public function deleteClientes(Request $request, $id = null){
        if($request->isMethod('post')){
            //echo "<pre>"; print_r($data); die;
            if(!empty($id)){
                Clientes::where(['id'=>$id])->delete();
                return redirect('/admin/view_clientes')->with('flash_message_success','Cliente eliminado con éxito');
            }else{
                return redirect('/admin/view_clientes')->with('flash_message_error','Error al eliminadar cliente');
            }
        }
        $clienteDetalles = Clientes::where(['id'=>$id])->first();
        return view('admin.clientes.delete_clientes')->with(compact('clienteDetalles'));
    }
}
