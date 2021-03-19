<?php

use Illuminate\Database\Seeder;
use App\CabangIndustri;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CabangIndustri::truncate();
        //SubCabangIndustri::truncate();

        $cabang_industri = CabangIndustri::create([
            'nama_cabangindustri' => 'Pangan',
        ]);
        $cabang_industri = CabangIndustri::create([
            'nama_cabangindustri' => 'Hulu Agro',
        ]);
        $cabang_industri = CabangIndustri::create([
            'nama_cabangindustri' => 'Permesinan, Alat Transportasi & Energi Terbarukan',
        ]);
        $cabang_industri = CabangIndustri::create([
            'nama_cabangindustri' => 'Hasil Pertambangan',
        ]);
        $cabang_industri = CabangIndustri::create([
            'nama_cabangindustri' => 'Kimia, Farmasi, Kosemetik & Kesehatan',
        ]);
        $cabang_industri = CabangIndustri::create([
            'nama_cabangindustri' => 'Ekonomi Kreatif',
        ]);
    }
}
