<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 1.Yöntem
    public function kayitEkle1()
    {
        $post           = new Post;
        $post->isim     = "mert";
        $post->soyisim  = "kaynak";
        $post->save();
        echo "Veriler Eklendi";
    }

    // 2.Yöntem
    public function kayitEkle2()
    {
        Post::create([
            "isim" => "mert1",
            "soyisim" => "kaynak1"
        ]);
        echo "Veriler Eklendi";
    }

    // Veri Listeleme
    public function veriListesi()
    {
        // $post = Post::query()->get(); 1. Yöntem
        $post = Post::all(); // 2. Yöntem
        return view("veriListesi", ["post" => $post]);
    }

    public function veriListesiWhere()
    {
        $post = Post::where("id", ">", 1)->get();
        return view("veriListesi", ["post" => $post]);
    }

    public function veriListesiOrderBy()
    {
        $post = Post::orderBy("id", "desc")->get();
        return view("veriListesi", ["post" => $post]);
    }

    public function veriListesiWhereOrderBy()
    {
        $post = Post::where("id", ">", 1)->orderBy("id", "asc")->get();
        return view("veriListesi", ["post" => $post]);
    }

    public function veriGuncelle()
    {
        $id = 1;
        $guncelle = Post::query()->find($id);
        $guncelle->isim = "rabia";
        $guncelle->soyisim = "ekren";
        $guncelle->save();
        echo "Veri Güncellendi.";
    }

    public function cokluGuncelle()
    {
        $guncelle = Post::where("id", ">", 1)->update(["isim" => "çoklu düzenlendi"]);
        echo "İsimler Düzenlendi";
    }

    public function veriSil()
    {
        $id = 3;
        $sil = Post::query()->find($id);
        $sil->delete();
        echo "Veri Silindi";
    }

    public function veriyiSartaGoreSil()
    {
        $sil = Post::where("id", ">", 1)->delete();
        echo "Silindi";
    }
}
