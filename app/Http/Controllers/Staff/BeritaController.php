<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Berita::all();
        $items = Auth::user()->id;
        $items = Berita::paginate(10);
        $items = Berita::latest()->get();
        return view('pages.staff.berita.index', [
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
        // return view('pages.staff.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'thumbnail' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $validated = $request->validate([
        //     'judul' => 'required|max:225',
        //     'headline' => 'required|max:45',
        //     'kategori' => 'required|max:64',
        //     'isi_berita' => 'required',
        // ]);
        // $data = Berita::create($request->all());
        // if ($request->hasFile('thumbnail')) {
        //     $request->file('thumbnail')->move('images/', $request->file('thumbnail')->getClientOriginalName());
        //     $data->thumbnail = $request->file('thumbnail')->getClientOriginalName();
        //     $data->save();
        //     ([
        //         'judul' => $request->judul,
        //         'headline' => $request->headline,
        //         'kategori' => $request->kategori,
        //         'thumbnail' => $request->thumbnail,
        //         'tanggal' => $request->tanggal,
        //         'name' => $request->name,
        //         'isi_berita' => $request->isi_berita
        //     ]);
        // } else {
        //     ([
        //         'judul' => $request->judul,
        //         'headline' => $request->headline,
        //         'kategori' => $request->kategori,
        //         'thumbnail' => 'thumbnail-default.jpg',
        //         'tanggal' => $request->tanggal,
        //         'name' => $request->name,
        //         'isi_berita' => $request->isi_berita
        //     ]);
        // }
        
        // return redirect('berita-koordinator.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($judul)
    {
        // $item = Berita::findOrFail($judul);
        $item = DB::table('berita')->where('judul', $judul)->first();
        return view('pages.staff.berita.detail',[
            'item' => $item
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($judul)
    {
        // $item = Berita::where('judul', $judul)->first();
        
        // return view('pages.staff.berita.edit', [
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
    public function update(Request $request, $judul)
    {
        // $data = $request->all();

        // // $this->validate($request, [
        // //     'thumbnail' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        // // ]);

        // if ($request->hasFile('thumbnail')) {
        //     $resource = $request->file('thumbnail');
        //     $name = $resource->getClientOriginalName();
        //     $finalName = date('His')  . $name;
        //     $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
        //     $item = Berita::findOrFail($judul);
        //     $item->update([
        //         'judul' => $request->judul,
        //         'thumbnail' => $finalName,
        //         'tanggal' => $request->tanggal,
        //         'headline' => $request->headline,
        //         'kategori' => $request->kategori,
        //         'isi_berita' => $request->isi_berita,
        //     ]);
        // } else {
        //     $item = Berita::findOrFail($judul);
        //     $item->update([
        //         'judul' => $request->judul,
        //         'tanggal' => $request->tanggal,
        //         'headline' => $request->headline,
        //         'kategori' => $request->kategori,
        //         'isi_berita' => $request->isi_berita,
        //     ]);
        // }
        
        // return redirect()->route('berita-koordinator.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $item = Berita::findOrFail($id);
        // $item->delete();

        // return redirect()->route('berita-koordinator.index');
    }
}
