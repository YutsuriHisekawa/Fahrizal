<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Kategori;
=======
use app\Models\Kategori;
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
<<<<<<< HEAD
     *
     * @return \Illuminate\Http\Response
=======
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
     */
    public function index()
    {
        return view('kategori.index');
    }

<<<<<<< HEAD
    public function data()
    {
        $kategori = Kategori::orderBy('id_kategori', 'desc')->get();

        return datatables()
            ->of($kategori)
            ->addIndexColumn()
            ->addColumn('aksi', function ($kategori) {
                return '
                <div class="text-center">
                <div class="btn-group">
                    <button onclick="editForm(`' . route('kategori.update', $kategori->id_kategori) . '`)" class="btn btn-success"><i  fill="current-color"class="bi bi-pen-fill"></i></button>
                    <button onclick="deleteData(`' . route('kategori.destroy', $kategori->id_kategori) . '`)" class="btn btn-xs btn-danger btn-flat"><i class="bi bi-x-octagon-fill"></i></button>
                </div>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
=======
    /**
     * Show the form for creating a new resource.
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
<<<<<<< HEAD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return response()->json('Data berhasil disimpan', 200);
=======
     */
    public function store(Request $request)
    {
        //
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
    }

    /**
     * Display the specified resource.
<<<<<<< HEAD
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);

        return response()->json($kategori);
=======
     */
    public function show(string $id)
    {
        //
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
    }

    /**
     * Show the form for editing the specified resource.
<<<<<<< HEAD
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
=======
     */
    public function edit(string $id)
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
    {
        //
    }

    /**
     * Update the specified resource in storage.
<<<<<<< HEAD
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();

        return response()->json('Data berhasil disimpan', 200);
=======
     */
    public function update(Request $request, string $id)
    {
        //
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
    }

    /**
     * Remove the specified resource from storage.
<<<<<<< HEAD
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return response(null, 204);
=======
     */
    public function destroy(string $id)
    {
        //
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
    }
}