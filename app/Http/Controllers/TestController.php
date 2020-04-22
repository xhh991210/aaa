<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = DB::table('atemp_jsfx')->select('atemp_jsfx.hylxid','atemp_jsfx.hylx_name','atemp_jsfx.jsid','atemp_jsfx.jsname',DB::raw('sum(atemp_jsfx.sl) as sl'),DB::raw('sum(atemp_jsfx.je) as je'),DB::raw('sum(atemp_jsfx.tcje) as tcje'))->whereBetween('c_date',['2020-01-01','2020-01-30'])->where('shbz','=','-10')->groupBy('atemp_jsfx.hylxid','atemp_jsfx.hylx_name','atemp_jsfx.jsid','atemp_jsfx.jsname','atemp_jsfx.xmgl')->get();
        //dd($res);
        return view('1',['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
