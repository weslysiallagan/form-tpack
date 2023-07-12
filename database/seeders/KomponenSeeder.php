<?php

namespace Database\Seeders;

use App\Models\Komponen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama_komponen = ['PK', 'CK', 'TK', 'PCK','TPK','TCK','TPCK'];

        for($i = 0; $i < count($nama_komponen); $i++) {
            Komponen::create([
                'nama_komponen' => "Komponen $nama_komponen[$i]"
            ]);
        }
    }
}
