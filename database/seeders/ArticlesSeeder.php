<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'title' => "Disuruh nyantumin body email waktu kirim CV, Nulis apaan ya?", 
                'header' => "Disuruh nyantumin body email waktu kirim CV, Nulis apaan ya?",
                'body' => htmlentities("<p><span style=\"font-weight: 400;\">Pada postan ini admin TimbangNganggur mengajarkan kepada followers untuk cara bagaimana si nyantumin body email saat mengirim CV, karena pada dasarnya masih banyak jobseekeers atau fresh graduate yang masih bingung bagaimana cara untuk mengisi body email dan banyak pula yang tidak berhasil karena tidak mengisi body email. Dan berikut adalah bebeberapa cara untuk mengisi body email tersebut, yaitu:</span></p><ol><li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Awali dengan salam kepada pemilik perusahaan / HRD dan perkenalan diri</span></li><li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Jelaskan maksud dan tujuanmu mengirim email tersebut</span></li><li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Tuliskan jabatan yang ingin dilamar, dan kalua perlu ceritakan juga dari mana kamu mengetahui info lowongan tersebut.</span></li><li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Berikan keterangan file apa saja yang mau kamu lampirkan bersama email kamu.</span></li><li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Akhiri dengan ucapan terimakasih dan &ldquo; Mohon maaf jika terdapat kesalahan kata dalam email saya&ldquo;</span></li></ol>"),
                'footer' => "Disuruh nyantumin body email waktu kirim CV, Nulis apaan ya?",
                'image_url' => "dummy.jpg",
                'tag' => "dummy",
                'slug' => "disuruh-nyantumin-body-email-waktu-kirim-cv-nulis-apaan-ya",
                'writer' => "dummy"
            ],
            [
                'title' => "Lamaran Rizky Billar aja diterima sama Lesti, lamaran kamu masih ditolak HRD?", 
                'header' => "Lamaran Rizky Billar aja diterima sama Lesti, lamaran kamu masih ditolak HRD?",
                'body' => htmlentities("<p><span style=\"font-weight: 400;\">Pada postingan ini admin TimbangNganggur mengajarkan kepada followers untuk bagaimana cara mengirim lamaran yang baik dan benar, mungkin ada beberapa dari kita yang tidak tahu atau tidak mengerti tentang cara mengirim lamaran yang baik dan benar. Dan berikut ialah tata cara untuk mengirim lamaran yang baik dan benar:</span></p><ol><li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Gunakan alamat e-mail yang professional, agar terlihat lebih professional kamu bisa menggunakan namamu dengan jelas. Dan, kalau perlu kamu sediakan e-mail khusus untuk pekerjaan</span></li><li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Tuliskan subjek yang jelas, di bagian ini kamu bisa menuliskan nama lengkapmu dan posisi apa yang dilamar.</span></li><li style=\"font-weight: 400;\"><span style=\"font-weight: 400;\">Jangan biarakan body e-mail kosong, nggak perlu Panjang dan bertele-tele, kamu cukup tuliskan dengan jelas apa tujuan dan maksud kamu mengirim e-mail tersebut.</span></li></ol>"),
                'footer' => "Lamaran Rizky Billar aja diterima sama Lesti, lamaran kamu masih ditolak HRD?",
                'image_url' => "dummy.jpg",
                'tag' => "dummy",
                'slug' => "lamaran-rizky-billar-aja-diterima-sama-lesti-lamaran-kamu-masih-ditolak-hrd",
                'writer' => "dummy"
            ],

            // Tools for slug : https://blog.tersmitten.nl/slugify/
            // Tools for html tag : https://wordhtml.com/
            // [
            //     'title' => "", 
            //     'header' => "",
            //     'body' => ``,
            //     'footer' => "",
            //     'image_url' => "",
            //     'tag' => "",
            //     'slug' => "",
            //     'writer' => ""   
            // ]
        ];

        foreach($articles as $article){
            Article::create($article);
        }
    }
}
