<?php

namespace azf\Http\Controllers;
use Session;
use Redirect;
use azf\Edo;
use azf\Colonia;
use Illuminate\Http\Request;

use azf\Http\Requests;

class EdoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Edo::All();
        return view('estado.index',compact('estados'));
    }

    public function getColonias(Request $request,$id)
    {
        if($request -> ajax())
        {
            $colons = Colonia::colonias($id);
            return response()->json($colons);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Edo::create([
            'nom_edo'=>$request['nom_edo'],
        ]);
        return redirect('/edo')->with('message','Estado Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $est = Edo::find($id);
        return view('estado.mostrar',['est'=>$est]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $est = Edo::find($id);
        return view('estado.edit',['est'=>$est]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edo = Edo::find($id);
        $edo->fill($request->all());
        $edo->save();
        Session::flash('message','Estado Editado Correctamente');
        return Redirect::to('/edo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Edo::destroy($id);
        Session::flash('message','Estado Eliminado Correctamente');
        return Redirect::to('/edo');
    }


    public function towns($id)
    {

    }
}
