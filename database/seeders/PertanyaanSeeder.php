<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pertanyaan = [
                        [1,'Saya dapat menyesuaikan pengajaran saya berdasarkan apa yang siswa saat ini mengerti atau tidak mengerti'],
                        [1,'Saya dapat menyesuaikan gaya mengajar saya untuk siswa yang berbeda.'],
                        [1,'Saya dapat menggunakan berbagai pendekatan pengajaran di ruang kelas.'],
                        [1,'Saya dapat menilai pembelajaran siswa dengan berbagai cara.'],
                        [2,'Saya memiliki pengetahuan yang cukup tentang mata pelajaran yang saya ajarkan'],
                        [2,'Saya dapat menggunakan cara berpikir khusus mata pelajaran dalam mata pelajaran pengajaran saya'],
                        [2,'Saya mengetahui teori dan konsep dasar mata pelajaran yang saya ajarkan'],
                        [2,'Saya mengetahui sejarah dan perkembangan teori-teori penting dalam mata pelajaran saya'],
                        [3,'Saya mengikuti teknologi baru yang penting.'],
                        [3,'Saya sering bermain-main dengan teknologi.'],
                        [3,'Saya tahu tentang banyak teknologi berbeda.'],
                        [3,'Saya memiliki keterampilan teknis yang saya perlukan untuk menggunakan teknologi.'],
                        [4,'Saya tahu bagaimana memilih pendekatan pengajaran yang efektif untuk membimbing pemikiran dan pembelajaran siswa dalam mata pelajaran pengajaran saya.'],
                        [4,'Saya tahu bagaimana mengembangkan tugas yang sesuai untuk mendorong pemikiran kompleks siswa tentang mata pelajaran saya.'],
                        [4,'Saya tahu bagaimana mengembangkan latihan yang dengannya siswa dapat mengkonsolidasikan pengetahuan mereka tentang mata pelajaran saya.'],
                        [4,'Saya tahu bagaimana mengevaluasi kinerja siswa dalam mata pelajaran pengajaran saya.'],
                        [5,'Saya dapat memilih teknologi yang meningkatkan pendekatan pengajaran untuk suatu pelajaran.'],
                        [5,'Saya dapat memilih teknologi yang meningkatkan pembelajaran siswa untuk suatu pelajaran.'],
                        [5,'Saya dapat mengadaptasi penggunaan teknologi yang saya pelajari untuk kegiatan pengajaran yang berbeda.'],
                        [5,'Saya berpikir kritis tentang bagaimana menggunakan teknologi di kelas saya.'],
                        [6,'Saya tahu bagaimana perkembangan teknologi telah mengubah bidang subjek saya.'],
                        [6,'Saya dapat menjelaskan teknologi apa saja yang telah digunakan dalam penelitian di bidang saya.'],
                        [6,'Saya tahu teknologi baru apa yang sedang dikembangkan di bidang subjek saya.'],
                        [6,'Saya tahu bagaimana menggunakan teknologi untuk berpartisipasi dalam wacana ilmiah di bidang saya'],
                        [7,'Saya dapat menggunakan strategi yang menggabungkan konten, teknologi, dan pendekatan pengajaran yang saya pelajari dalam mata pelajaran di kelas'],
                        [7,'Saya dapat memilih teknologi yang meningkatkan konten untuk pelajaran'],
                        [7,'Saya dapat memilih teknologi untuk digunakan di kelas saya yang meningkatkan apa yang saya ajarkan, bagaimana saya mengajar, dan apa yang dipelajari siswa'],
                        [7,'Saya dapat mengajarkan pelajaran yang secara tepat menggabungkan mata pelajaran pengajaran, teknologi, dan pendekatan pengajaran saya']
                    ];
        
                    for($i = 0; $i < count($pertanyaan); $i++) {
                        Pertanyaan::create([
                            'id_komponen' => $pertanyaan[$i][0],
                            'pertanyaan' => $pertanyaan[$i][1]
                        ]);
                    }            
        
    }
}
