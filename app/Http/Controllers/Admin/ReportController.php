<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $courier = Courier::all();
        $users = DB::table('transactions')
            ->select(DB::raw('count(id) AS total'), DB::raw('YEAR(timeout) AS tahun'), DB::raw('MONTHNAME(timeout) AS bulan'))
            ->groupBy('tahun','bulan')
            ->get();
        return view('auth-admin.report.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth-admin.courier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courier = new Courier;
        $courier->courier = $request->courier;
        $courier->save();
        return redirect()->route('courier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function show(Courier $courier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courier = Courier::find($id);
        return view('auth-admin.courier.edit', compact('courier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $courier = Courier::find($id);
        $courier->courier = $request->courier;
        $courier->save();
        return redirect()->route('courier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Courier::find($id)->delete();
        return redirect()->route('courier.index');
    }
}
