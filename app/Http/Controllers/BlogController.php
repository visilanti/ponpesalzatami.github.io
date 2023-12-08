<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    #Fungsi index
    public function index()
    {
        return view('admin.blogs.index', [
            'artikels' => Blog::orderBy('id','desc')->get()
        ]);
    }

    # Halama Create
    public function create()
    {
        return view('admin.blogs.create');
    }

    #Fungsi store
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:2000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
            'desc.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);
         // Image
         $fileName = time() . '.' . $request->image->extension();
         $request->file('image')->storeAs('public/artikel', $fileName); 

        # Artikel
        $storage = "public/content-artikel";
        $dom = new \DOMDocument();

         # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
         libxml_use_internal_errors(true);
         $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
         # Menghapus buffer kesalahan libxml
         libxml_clear_errors();
 
        # Baca di https://dosenit.com/php/fungsi-libxml-php
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                Storage::putFileAs('public', $request->file('image'), $filePath);
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save($filePath);
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => Str::limit($dom->saveHTML()),
        ]);

        return redirect(route('blog'))->with('success', 'data berhasil di simpan');
    }

    #Fungsi Edit
    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blogs.edit', [
            'artikel' => $artikel
        ]);
    }

    #Fungsi update
    public function update(Request $request, $id)
    {}

    #Fungsi Delete
    public function destroy($id)
    {}
}

