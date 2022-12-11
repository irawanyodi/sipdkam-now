<?php

namespace App\Http\Controllers;

use App\User;
use App\RekamMedis;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(RekamMedis::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(RekamMedis $model)
    {
        $this->authorize('manage-users', User::class);

        return view('rms.index', ['rekammedis' => $model->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RekamMedis $model)
    {
        $request['created_at'] = now();
        $request['updated_at'] = now();
        $model->create($request->all());
        // return $request;
        return redirect()->route('rekammedis.index')->withStatus(__('Rekam Medis successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RekamMedis  $rekamMedis
     * @return \Illuminate\Http\Response
     */
    public function show(RekamMedis $rekamMedis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RekamMedis  $rekamMedis
     * @return \Illuminate\Http\Response
     */
    public function edit(RekamMedis $rekamMedis)
    {
        return view('rms.edit', compact('rekamMedis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekamMedis  $rekamMedis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RekamMedis $rekamMedis)
    {
        $rekamMedis->update($request->all());

        return redirect()->route('rekammedis.index')->withStatus(__('Rekam Medis successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekamMedis  $rekamMedis
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekamMedis $rekamMedis)
    {
        // return $rekamMedis;
        $rekamMedis->delete();

        return redirect()->route('rekammedis.index')->withStatus(__('Rekam Medis successfully deleted.'));
    }
}
