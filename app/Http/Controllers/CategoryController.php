<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_kategori = Category::paginate(3);
        return view('kategori.index', compact('daftar_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        // dapatkan keyword dari querystring ?name=keyword
        $keyword = $request->get("name");
        // cari kategori where name == keyword dari querystring
        return \App\Category::where("name", "LIKE", "%$keyword%")->get();
    }

    public function delete($id){
        $category = \App\Category::findOrFail($id);
        if(!$category->trashed()){
        $category->delete();
        return "Kategori $category->name berhasil dihapus";
    }
    }
        /**
        * Action untuk merestore kategori yang telah didelete
        */
    public function restore($id){
        $category = \App\Category::withTrashed()->findOrFail($id);
        if(!$category->trashed()){
        return "Kategori tidak perlu direstore";
        }
        return "Kategori $category->name berhasil direstore";
    }
        /**
        * Action untuk permanent delete dari database (tidak bisa direstore)
        */
    public function permanentDelete($id){
        $category = \App\Category::withTrashed()->findOrFail($id);
        $category->forceDelete();
        return "Kategori $category->name berhasil dihapus permanent.
        Tidak bisa direstore";
    }

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
        
    }
}
