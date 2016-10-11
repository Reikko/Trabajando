<?php

namespace azf\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
use azf\Edo;
use azf\Fracc;
use azf;
use azf\Colonia;
use Illuminate\Http\Request;

use azf\Http\Requests;

class ColControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colonias = DB::table('colonias')
            ->join('edos', 'colonias.id_edo', '=', 'edos.id')->get();
        return view('col_carpet.index',compact('colonias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = Edo::lists('nom_edo','id');
        return view('col_carpet.create',compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Colonia::create([
            'id_edo'=>$request['id_edo'],
            'nom_col'=>$request['nom_col'],
        ]);
        return redirect('/colonias')->with('message','Colonia Creada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $col = Colonia::find($id);
        $states = Edo::lists('nom_edo','id');
        return view('col_carpet.edit',['col'=>$col],compact('states'));
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
        $col = Colonia::find($id);
        $col->fill($request->all());
        $col->save();
        Session::flash('message','Colonia editada correctamente');
        return Redirect::to('/colonias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Colonia::destroy($id);
        Session::flash('message','Colonia eliminada correctamente');
        return Redirect::to('/colonias');
    }

    public function getFraccion(Request $request,$id)
    {
        if($request -> ajax())
        {
            $fracs = Fracc::fracciones($id);
            return response()->json($fracs);
        }
    }

    public function getEditFraccion(Request $request,$col,$id)
    {
        if($request -> ajax())
        {
            $colons = Colonia::colonias($id);
            return response()->json($colons);
        }
    }

}
