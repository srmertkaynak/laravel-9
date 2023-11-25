<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function veriListesi()
    {
        $veriler = DB::select("SELECT * FROM post");
        return view("veriListesi", ["veriler" => $veriler]);
    }

    public function veriEkle()
    {
        $ekle = DB::insert("INSERT INTO post (isim,soyisim) VALUES (?,?)", ["mert", "kaynak"]);
        if ($ekle) {
            echo "Veri Eklendi";
        }
    }

    public function veriGuncelle()
    {
        $guncelle = DB::update("UPDATE post SET isim=?,soyisim=? WHERE id=?", ["ahmet", "külte", 101]);
        if ($guncelle) {
            echo "Veri Güncellendi";
        }
    }

    public function veriSil()
    {
        $sil = DB::delete("DELETE FROM post WHERE id=?", [101]);
        if ($sil) {
            echo "Veri Silindi";
        }
    }

    public function hepsiniTemizle()
    {
        $sil = DB::statement("TRUNCATE table post");
        if ($sil) {
            echo "Tüm Veriler Silindi";
        }
    }

    public function tabloyuSil()
    {
        $sil = DB::statement("DROP table post");
        if ($sil) {
            echo "Tablo Silindi";
        }
    }
}
