<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tower;
class TowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tower = Tower::all();
        return view('home', compact('tower'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('towers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tower_img'         => 'required',
            'tower_sending'     => 'required',
            'tower_typeleaf'    => 'required',
            'tower_parish'      => 'required',
            'tower_district'    => 'required',
            'tower_pravince'    => 'required',
            'tower_code'        => 'required',
            'LATDEG'            => 'required',
            'LONGDEG'           => 'required',
            'tower_customer'    => 'required',
            'tower_network'     => 'required',
            'tower_license_code'=> 'required',
            'tower_license_date'=> 'required'
        ]);
        $tower = new tower([
            'tower_img'         => $request->get('tower_img'),
            'tower_sending'     => $request->get('tower_sending'),
            'tower_typeleaf'    => $request->get('tower_typeleaf'),
            'tower_parish'      => $request->get('tower_parish'),
            'tower_district'    => $request->get('tower_district'),
            'tower_pravince'    => $request->get('tower_pravince'),
            'tower_code'        => $request->get('tower_code'),
            'LATDEG'            => $request->get('LATDEG'),
            'LONGDEG'           => $request->get('LONGDEG'),
            'tower_customer'    => $request->get('tower_customer'),
            'tower_network'     => $request->get('tower_network'),
            'tower_license_code'=> $request->get('tower_license_code'),
            'tower_license_date'=> $request->get('tower_license_date')
        ]);
        $tower->save();
        return redirect('/towers')->with('success', 'Tower saved!');
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
        $tower = Tower::find($id);
        return view('towers.edit', compact('towers')); 
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
        
        $request->validate([
            'tower_img'         => 'required',
            'tower_sending'     => 'required',
            'tower_typeleaf'    => 'required',
            'tower_parish'      => 'required',
            'tower_district'    => 'required',
            'tower_pravince'    => 'required',
            'tower_code'        => 'required',
            'LATDEG'            => 'required',
            'LONGDEG'           => 'required',
            'tower_customer'    => 'required',
            'tower_network'     => 'required',
            'tower_license_code'=> 'required',
            'tower_license_date'=> 'required'
        ]);

        $tower = Tower::find($id);
        $tower->tower_img =  $request->get('tower_img');
        $tower->tower_sending = $request->get('tower_sending');
        $tower->tower_typeleaf = $request->get('tower_typeleaf');
        $tower->tower_parish = $request->get('tower_parish');
        $tower->tower_district = $request->get('tower_district');
        $tower->tower_pravince = $request->get('tower_pravince');
        $tower->tower_code = $request->get('tower_code');
        $tower->LATDEG = $request->get('LATDEG');
        $tower->LONGDEG = $request->get('LONGDEG');
        $tower->tower_customer = $request->get('tower_customer');
        $tower->tower_network = $request->get('tower_network');
        $tower->tower_license_code = $request->get('tower_license_code');
        $tower->tower_license_date = $request->get('tower_license_date');
        $tower->save();

        return redirect('/towers')->with('success', 'Tower updated!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tower = Tower::find($id);
        $tower->delete();

        return redirect('/towers')->with('success', 'Tower delete');
    }
}
