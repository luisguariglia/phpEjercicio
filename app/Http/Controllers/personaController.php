<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Requests\personaFormRequest;
use App\Http\Requests\personaFormRequest;
use App\User;
use Illuminate\Support\Facades\Redirect;
use DB;

class personaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        $personas=User::all();
        return view('abm.persona.index',compact('personas'));
    }

    public function create(){
        return view("abm.persona.create");
    }
    public function store(Request $request){
        $newpersona=new User();
        $newpersona->name=$request->get('name');
        $newpersona->email=$request->get('email');
        $newpersona->password=$request->get('password');
        $newpersona->save();
        return Redirect::to('abm/persona');
    }
    public function show($id){
        return view("abm.persona.show",["persona"=>User::findOrFail($id)]);
    }
    public function edit($id){
        $persona=User::findOrFail($id);
        return view("abm.persona.edit",compact('persona'));
    }
    public function update(Request $request,$id){
        $persona=User::findOrFail($id);
        $persona->name=$request->get("name");
        $persona->email=$request->get('email');
        $persona->password=$request->get('password');
        $persona->update();
        return Redirect::to('abm/persona');
    }
    public function destroy($persona){
        $persona = User::find($persona);
        $exito = $persona->delete();
        return $exito ? response()->json([
            'success' => 'Record has been deleted successfully!',
            'ok' => true
        ])
        : response()->json([
            'error' => 'Hubo un error al eliminar el dato!',
            'ok' => false
        ]);
    }
    public function delete(Request $request){
        if($request->ajax()){
            return response()->json(["mensaje"=>$request]);
        }
        //return view('abm/persona');
    }

}
?>
