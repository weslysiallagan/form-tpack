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
                        [15,'Saya dapat menyesuaikan pengajaran saya berdasarkan apa yang siswa saat ini mengerti atau tidak mengerti'],
                        [15,'Saya dapat menyesuaikan gaya mengajar saya untuk siswa yang berbeda.'],
                        [15,'Saya dapat menggunakan berbagai pendekatan pengajaran di ruang kelas.'],
                        [15,'Saya dapat menilai pembelajaran siswa dengan berbagai cara.'],
                        [16,'Saya memiliki pengetahuan yang cukup tentang mata pelajaran yang saya ajarkan'],
                        [16,'Saya dapat menggunakan cara berpikir khusus mata pelajaran dalam mata pelajaran pengajaran saya'],
                        [16,'Saya mengetahui teori dan konsep dasar mata pelajaran yang saya ajarkan'],
                        [16,'Saya mengetahui sejarah dan perkembangan teori-teori penting dalam mata pelajaran saya'],
                        [17,'Saya mengikuti teknologi baru yang penting.'],
                        [17,'Saya sering bermain-main dengan teknologi.'],
                        [17,'Saya tahu tentang banyak teknologi berbeda.'],
                        [17,'Saya memiliki keterampilan teknis yang saya perlukan untuk menggunakan teknologi.'],
                        [18,'Saya tahu bagaimana memilih pendekatan pengajaran yang efektif untuk membimbing pemikiran dan pembelajaran siswa dalam mata pelajaran pengajaran saya.'],
                        [18,'Saya tahu bagaimana mengembangkan tugas yang sesuai untuk mendorong pemikiran kompleks siswa tentang mata pelajaran saya.'],
                        [18,'Saya tahu bagaimana mengembangkan latihan yang dengannya siswa dapat mengkonsolidasikan pengetahuan mereka tentang mata pelajaran saya.'],
                        [18,'Saya tahu bagaimana mengevaluasi kinerja siswa dalam mata pelajaran pengajaran saya.'],
                        [19,'Saya dapat memilih teknologi yang meningkatkan pendekatan pengajaran untuk suatu pelajaran.'],
                        [19,'Saya dapat memilih teknologi yang meningkatkan pembelajaran siswa untuk suatu pelajaran.'],
                        [19,'Saya dapat mengadaptasi penggunaan teknologi yang saya pelajari untuk kegiatan pengajaran yang berbeda.'],
                        [19,'Saya berpikir kritis tentang bagaimana menggunakan teknologi di kelas saya.'],
                        [20,'Saya tahu bagaimana perkembangan teknologi telah mengubah bidang subjek saya.'],
                        [20,'Saya dapat menjelaskan teknologi apa saja yang telah digunakan dalam penelitian di bidang saya.'],
                        [20,'Saya tahu teknologi baru apa yang sedang dikembangkan di bidang subjek saya.'],
                        [20,'Saya tahu bagaimana menggunakan teknologi untuk berpartisipasi dalam wacana ilmiah di bidang saya'],
                        [21,'Saya dapat menggunakan strategi yang menggabungkan konten, teknologi, dan pendekatan pengajaran yang saya pelajari dalam mata pelajaran di kelas'],
                        [21,'Saya dapat memilih teknologi yang meningkatkan konten untuk pelajaran'],
                        [21,'Saya dapat memilih teknologi untuk digunakan di kelas saya yang meningkatkan apa yang saya ajarkan, bagaimana saya mengajar, dan apa yang dipelajari siswa'],
                        [21,'Saya dapat mengajarkan pelajaran yang secara tepat menggabungkan mata pelajaran pengajaran, teknologi, dan pendekatan pengajaran saya']
                    ];
        
                    for($i = 0; $i < count($pertanyaan); $i++) {
                        Pertanyaan::create([
                            'id_komponen' => $pertanyaan[$i][0],
                            'pertanyaan' => $pertanyaan[$i][1]
                        ]);
                    }            
        
    }
}
