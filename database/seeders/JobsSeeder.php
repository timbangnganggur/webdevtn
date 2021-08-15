<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name' => 'Online Marketing',
            'salary' => -1, // tidak disebutkan
            'type' => 'full_time',
            'description' => 'Bertanggung jawab atas semua hal yang berhubungan sama pemasaran dan branding produk perusahaan di masyarakat secara digital, Menyusun perencanaan untuk promosi sebuah produk melalui channel digital, Membuat konsep campaign marketing di channel-channel digital secara keseluruhan, Membuat konsep dan merancang distribusi content campaign marketing di media sosial',
            'qualification' => 'Pria / Wanita , Usia 18 - 30 tahun, Tidak dalam ikatan Kerja, Domisili Malang Raya, Berpengalaman di bidang marketing',
            'companies_id' => '1'
        ]);

        Job::create([
            'name' => 'Coordinator',
            'salary' => -1,
            'type' => 'full_time',
            'description' => 'Mengetahui beban bawahannya, mereka harus dapat memastikan bahwa pekerjaan yang dikerjakan bawahan apakan sudah overload, underload atau normal, Mengetahui dan memantau apa yang sedang dikerjakan oleh bawahannya, Mengetahui dan memantau target setiap bawahannya',
            'qualification' => 'Laki - laki, Usia 24-30 tahun, Pendidikan min SMA/SMK, Memiliki SIM A / C, Jujur, Teliti, Disiplin, Bertanggung Jawab',
            'companies_id' => '2'
        ]);

        Job::create([
            'name' => 'Talent Acquisition',
            'salary' => -1,
            'type' => 'part_time',
            'description' => 'Memastikan proses recrutment workers berjalan dengan baik',
            'qualification' => 'Memiliki pengalaman sebagai rekrutmen di perusahaan berbasis teknologi min 1 tahun, memiliki kemampuan menulis dan berkomunikasi dalam bahasa Indonesia dan Inggris yang baik, Mandiri dapat diandalkan dan bertanggung jawab, Berdomisili di Yogyakarta, dan Memiliki laptop yang berfungsi dengan baik',
            'companies_id' => '3'
        ]);

        Job::create([
            'name' => 'Onboarding Staff',
            'salary' => -1,
            'type' => 'part_time',
            'description' => 'Bertanggung jawab pada proses onboarding workers dan management project',
            'qualification' => 'Memiliki pengalaman kerja dibidang Project Management/Event Management, Memiliki kemampuan menulis dan berkomunikasi dalam Bahasa Indonesia dan Inggris yang baik, Mandiri dan dapat diandalkan, Bertanggung jawab, Berdomisili di Yogyakarta, dan Memiliki laptop yang berfungsi dengan baik',
            'companies_id' => '3'
        ]);

        Job::create([
            'name' => 'Creative Team',
            'salary' => -1,
            'type' => 'internship',
            'description' => 'Membuat konsep kreatif, Mengawasi pekerjaan tim, Membuat laporan kinerja',
            'qualification' => 'Memiliki pengalaman penulisan naskah, Memiliki passion besar dalam bidang kreatif, Kreatif, artsy, media, dan digital savvy',
            'companies_id' => '4'
        ]);

        Job::create([
            'name' => 'Content Creator',
            'salary' => -1,
            'type' => 'internship',
            'description' => 'Menyediakan konten yang menarik untuk sosial media dan website, Melakukan peliputan untuk keperluan konten, Kreatif dalam mengembangkan konten digital, Dapat membaca arah tren perkembangan digital dan memanfaatkannya untuk keperluan promosi perusahaan',
            'qualification' => 'Memiliki kemampuan copywriting yang baik, Menguasai basic Photoshop, Menguasai basic video editing',
            'companies_id' => '4'
        ]);

        Job::create([
            'name' => 'Foto & Videographer',
            'salary' => -1,
            'type' => 'internship',
            'description' => 'Melakukan product styling, lighting arrangement dan photoshoot, Menguasi teknik fotografi dan editing, Mendokumentasikan kegiatan baik di dalam kantor maupun di luar kantor, Bertanggungjawab untuk seluruh alat fotografi dan penyimpanan data foto',
            'qualification' => 'Imaginatif, Kreatif, dan Inovatif, Dapat mengoperasikan Kamera profesional (SLR, DSLR dan Kamera Digital), Mahir dalam menggunakan Adobe Creative Suite (Photoshop dan Lightroom)',
            'companies_id' => '4'
        ]);

        Job::create([
            'name' => 'Designer',
            'salary' => -1,
            'type' => 'internship',
            'description' => 'menyiapkan segala material untuk diimpretasikan ke dalam bentuk visual, membuat rencana dan konsep dari segala informasi dan material yang diberikan oleh klien, mengilustrasikan konsep dengan membuat draf kasar dari ilustrasi dan copy-nya, menyelesaikan proyek dan mengkoordinasikannya dengan pihak luar seperti agency, art service, percetakan, dan lain-lain',
            'qualification' => 'Punya portofolio sesuai bidang, Bertanggung jawab, Waktu kerja fleksibel',
            'companies_id' => '5'
        ]);

        Job::create([
            'name' => 'Copywriter',
            'salary' => -1,
            'type' => 'internship',
            'description' => 'Menulis teks untuk materi iklan dan pemasaran, Membuat konten yang engaging untuk media sosial, Meningkatkan visibilitas brand melalui berbagai media, Menulis konten website terkait dengan branding seperti homepage, landing page, dan product page',
            'qualification' => 'Punya portofolio sesuai bidang, Bertanggung jawab, Waktu kerja fleksibel',
            'companies_id' => '5'
        ]);

        Job::create([
            'name' => 'Fotographer',
            'salary' => -1,
            'type' => 'internship',
            'description' => 'Harus imajinatif, dengan mata yang baik untuk gambar, Memiliki keterampilan teknis dan fotografi yang luar biasa, Memiliki kemampuan komunikasi dan orang-orang baik, Menjadi komersial perhatian dan pandai pemasaran sendiri',
            'qualification' => 'Punya portofolio sesuai bidang, Bertanggung jawab, Waktu kerja fleksibel',
            'companies_id' => '5'
        ]);
    }
}
