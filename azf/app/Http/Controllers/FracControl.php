<?php

namespace azf\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
use azf\Fracc;
use azf\Edo;
use azf\Colonia;
use azf;
use Illuminate\Http\Request;

use azf\Http\Requests;

class FracControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$fracs = Fracc::All();
        $fracs = DB::table('fraccs')
            ->join('colonias', 'fraccs.id_col', '=', 'colonias.id')
            ->select('fraccs.*', 'colonias.nom_col')
            ->get();
        return view('fracciona.index',compact('fracs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Edo::lists('nom_edo','id');
        return view('fracciona.create',compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fracc::create([
            'nom_frac'=>$request['nom_frac'],
            'id_col'=>$request['id_col'],
        ]);
        return redirect('/fr')->with('message','Fraccionamiento creado correctamente');
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
        $fr = Fracc::find($id);
        $col = Colonia::lists('nom_col','id');
        $est = Edo::lists('nom_edo','id');
        return view('fracciona.edit',['fr'=>$fr],compact('col','est'));
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
        $fra = Fracc::find($id);
        $fra->fill($request->all());
        $fra->save();
        Session::flash('message','Fraccionamiento Editado');
        return Redirect::to('/fr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fracc::destroy($id);
        Session::flash('message','Fraccionamiento eliminado');
        return Redirect::to('/fr');
    }
}
