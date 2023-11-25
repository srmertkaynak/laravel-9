<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SayfaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("sayfa")->insert([
            "sayfaAdi" => "Hakkımda",
            "sayfaNo" => 1
        ]);
    }
}
