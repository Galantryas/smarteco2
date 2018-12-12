<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKehijauanWilayah;

class KehijauanWilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelKehijauanWilayah::all();
        return view('kehijauanwilayah',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_kehijauanwilayah');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelKehijauanWilayah();
        $data->hsa = $request->hsa;
        $data->hpyddk = $request->hpyddk;
        $data->hutan_lindung = $request->hutan_lindung;
        $data->kwa = $request->kwa;
        $data->hptt = $request->hptt;
        $data->hpt = $request->hpt;
        $data->kpa = $request->kpa;
        $data->tahun = $request->tahun;
        $data->save();
        return redirect()->route('kehijauanwilayah.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
