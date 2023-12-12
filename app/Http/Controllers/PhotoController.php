<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        return view('admin.photo.index');
    }

    public function store(Request $request){
    $rules = [
        'judul' => 'required',
        'image' => 'required|max:2000|mimes:jpg,jpeg,png,webp',
    ];

    $messages = [
        'judul.required' => 'Judul wajib diisi!',
        'image.required' => 'Gambar wajib diisi!',
        'image.max' => 'Ukuran gambar tidak boleh melebihi 2000 kilobita',
        'image.mimes' => 'Format gambar harus jpg, jpeg, png, atau webp',
    ];

    $this->validate($request, $rules, $messages);

    // Image
    $fileName = time() . '.' . $request->image->extension();
    $request->file('image')->storeAs('public/photo', $fileName);

    Photo::create([
        'judul' => $request->judul,
        'image' => $fileName,
    ]);

    return redirect(route('photo'))->with('success', 'Photo berhasil disimpan');
}


    public function update(){

    }

    public function destroy(){

    }
}
