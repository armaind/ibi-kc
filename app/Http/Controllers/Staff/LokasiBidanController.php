<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LokasiBidan;

class LokasiBidanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = LokasiBidan::all();

        return view('pages.staff.lokasibidan.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.staff.lokasibidan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'nrbidan' => 'required',
        //     'name' => 'required',
        // ]);

        // $data = LokasiBidan::create([
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'nrbidan' => $request->nrbidan,
        //     'puskesmas' => $request->puskesmas,
        // ]);


        // // $data = LokasiBidan::create($request->all());

        // return redirect()->route('penempatan-bidann.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = LokasiBidan::findOrFail($id);

        return view('pages.staff.lokasibidan.detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $item = LokasiBidan::findOrFail($id);

        // return view('pages.staff.lokasibidan.edit', [
        //     'item' => $item
        // ]);
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
        // $data = $request->all();
        // $item = LokasiBidan::findOrFail($id);
        // $item->update($data);

        // return redirect()->route('penempatan-bidann.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $item = LokasiBidan::findOrFail($id);
        // $item->delete();
        // return redirect()->route('penempatan-bidann.index');
    }
}
