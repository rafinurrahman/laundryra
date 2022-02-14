<?php

namespace App\Http\Controllers;

use App\Models\paket;
use Illuminate\Http\Request;
use App\Http\Requests\StorepaketRequest;
use App\Http\Requests\UpdatepaketRequest;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = Paket::all();
        return view('paket.index', compact('paket'));
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
     * @param  \App\Http\Requests\StorepaketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Paket::create($data);
        return redirect('paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaketRequest  $request
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaketRequest $request, paket $paket)
    {
        Paket::findOrFail($request->id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(paket $paket)
    {
        Paket::destroy($paket->id);


        return redirect('/paket');
    }
}
