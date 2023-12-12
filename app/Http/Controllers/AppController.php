<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get()
        ]);
    }
    public function berita() {
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }
    public function detail($slug) {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel
        ]);
    }
}

