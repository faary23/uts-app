<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_barangs')->insert([[
            'kode' => '1',
            'jenis' => 'Chana Barca'
        ],
        [
            'kode' => '2',
            'jenis' => 'Chana Auranti'
        ],
        [
            'kode' => '3',
            'jenis' => 'Chana Maru'
        ]
        ]);
    }
}
