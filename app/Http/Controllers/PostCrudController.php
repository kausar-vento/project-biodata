<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class PostCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.home_post', [
            'data_post' => Post::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create_post', [
            'data_category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'category_id' => 'required',
            'tittle' => 'required|min:5|max:100',
            'creator' => 'required|min:5|max:100',
            'isi' => 'required|min:5|max:1000'
        ]);

        Post::create($validasiData);
        return redirect()->route('admin-post.index')->with('success', 'Penambahan Data Artikel Berhasil Dilakukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('posts')->where('id', $id)->first();;
        return view('admin.post.edit_post', compact('data'),[
            'data_category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasiData = $request->validate([
            'category_id' => '',
            'tittle' => 'min:5|max:100',
            'creator' => 'min:5|max:100',
            'isi' => 'min:5|max:1000'
        ]);

        Post::find($id)->update($request->all());

        return redirect()->route('admin-post.index')->with('success', 'Perubahan Data Artikel Berhasil Dilakukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('admin-post.index')->with('success', 'Penghapusan Data Artikel Berhasil Dilakukan');
    }
}
