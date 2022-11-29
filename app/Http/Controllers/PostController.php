<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Produk;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();

        return view('admin.index_post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view ('admin.create_post', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required|string',
            'produk_id' => 'required',
            'isi' => 'required|string',
            'tanggalDibuat' => 'required|date',
            
        ]);
        $validate['status'] = 'aktif';

        Post::create($validate);

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $post->status = 'aktif'; // mengubah status menjadi aktif
        $post->update();

        return redirect('post');
    }

    public function hide($id)
    {
        $post = Post::find($id);
        $post->status = 'post'; // mengubah status menjadi nonaktif
        $post->update();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $produk = Produk::all();

        return view('admin.edit_post', compact('post', 'produk'));

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
        $post = Post::find($id);
        $post['status'] = 'aktif';
        $p = $request->all();
        $post->update($p);

        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('post');
    }
}
