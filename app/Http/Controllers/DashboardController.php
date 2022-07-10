<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.layout.main');
    }

    public function post()
    {
        return view('dashboard.post.index',[
            'penjualan' => Penjualan::latest()->where('user_id',auth()->id())->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.post.create',[
            'category' => Category::all(),
        ]);
    }

    public function created(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:2048',
            'slug' => 'required|unique:penjualans',
            'category_id' => 'required',
            'harga' => 'required',
            'body' => 'required',
        ]);

        if($request->file('image')){
            $validasi['image'] = $request->file('image')->store('image-post');
        }

        $validasi['user_id'] = auth()->user()->id;
        $validasi['excrept'] = Str::limit(strip_tags($request->body), 200);

        Penjualan::create($validasi);
        return redirect('/dashboard/post')->with('lolos', 'Post Created');
    }

    public function delete(Penjualan $penjualan)
    {
        if(auth()->user()->id == $penjualan->user_id){
            if($penjualan->image){
                Storage::delete($penjualan->image);
            }
            $penjualan->delete();
            return redirect('/dashboard/post')->with('lolos', 'Post Deleted');
        }else{
            return redirect('/dashboard/post')->with('lolos', 'Post Not Found');
        }
    }

    public function update(Penjualan $penjualan)
    {
        return view('dashboard.post.update',[
            'penjualan' => $penjualan,
            'category' => Category::all(),
        ]);
    }

    public function updated(Request $request, Penjualan $penjualan)
    {
        $kredensial = [
            'name' => 'required',
            'image' => 'image|file|max:2048',
            'category_id' => 'required',
            'harga' => 'required',
            'body' => 'required',
        ];

        if($request->slug != $penjualan->slug){
            $kredensial['slug'] = 'required|unique:penjulans';
        }

        $validate = $request->validate($kredensial);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('image-post');
        }

        $validate['user_id'] = auth()->user()->id;
        $validate['excrept'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $penjualan->id)->update($validate);
        return redirect('/dashboard/post')->with('update', 'Post Updated');
    }
}
