<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Throwable;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all(); // mengambil data produk dalam database
        return view('admin.index_produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all(); // mengambil data kategori pada saat dropdown
        return view('admin.create_produk', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto')->store('produk/foto');
        $validate = $request->validate([
            'namaProduk' => 'required|string',
            'kategori_id' => 'required',
            'foto' => 'required|string',
            'harga' => 'required|double',
            'descProduk' => 'required|string',
        ]);

        $validate['foto'] = $file;

        Produk::create($validate);

        return redirect('produk');

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
        $produk = Produk::find($id); // mengambil data produk berdasarkan id
        $kategori = Kategori::all(); // mengambil data tabel kategori saat dropdown 
        return view ('admin.edit_produk', compact('produk', 'kategori'));
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
        $produk = Produk::find($id);
        $produk->request->all();
      

        $validate = $request->validate([
            'namaProduk' => 'required|string',
            'kategori_id' => 'required',
            'foto' => 'required|string',
            'harga' => 'required|double',
            'descProduk' => 'required|string',
        ]);

       

        try 
        {
            $file = $request->file('foto')->store('produk/foto');
            $validate['foto'] = $file;
            $produk->update($validate);

        }catch(Throwable $th)
        {
            $validate['foto'] = $produk->foto;
            $produk->update($validate);
        }

        return redirect('produk');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return redirect('produk');
    }
}
