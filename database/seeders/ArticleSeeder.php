<?php

namespace Database\Seeders;

use App\Models\Writer;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataScience = Category::with('writer')->where('name', 'Data Science')
            ->first();
        $networkSecurity = Category::with('writer')->where('name', 'Network Security')
            ->first();

        Article::factory()->create([
            'title' => 'Machine Learning',
            'body' => "<p>Machine Learning atau Pembelajaran Mesin adalah cabang dari kecerdasan buatan (Artificial Intelligence) yang memungkinkan komputer untuk belajar dari data tanpa harus diprogram secara eksplisit. Dalam machine learning, komputer menggunakan algoritma untuk mengenali pola, membuat prediksi, dan mengambil keputusan berdasarkan data yang ada. Dengan kata lain, machine learning memungkinkan komputer untuk \"belajar\" dari pengalaman seperti manusia.</p><br><p>Pembelajaran mesin bekerja dengan cara melatih model komputer menggunakan sejumlah data sebagai contoh. Model ini mempelajari pola atau karakteristik dari data tersebut, dan setelah dilatih, model ini dapat digunakan untuk memprediksi hasil atau pengambilan keputusan dari data baru. Misalnya, dalam pengenalan gambar, machine learning dapat digunakan untuk melatih komputer mengenali wajah seseorang atau mengidentifikasi objek dalam foto.</p>",
            'image_link' => 'https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/Blog-Blog-19-Agustus-Apa-itu-Machine-Learning-Beserta-Pengertian-dan-Cara-Kerjanya.png',
            'writer_id' => $dataScience->writer
                ->shuffle()
                ->first()
                ->id,
            'category_id' => $dataScience->id,
        ]);

        Article::factory()->create([
            'title' => 'Deep Learning',
            'body' => "<p>Deep learning adalah salah satu cabang dari pembelajaran mesin yang berfokus pada penggunaan jaringan saraf tiruan untuk memproses dan menganalisis data. Berbeda dengan metode tradisional, deep learning mampu menangani data dalam jumlah besar dan kompleks dengan tingkat akurasi yang tinggi. Teknologi ini telah menjadi dasar bagi berbagai inovasi modern, mulai dari pengenalan suara hingga kendaraan otonom.</p><br><p>Keberhasilan deep learning sebagian besar didorong oleh kemajuan dalam komputasi dan ketersediaan data dalam jumlah besar. Model deep learning memerlukan daya komputasi yang tinggi dan dataset yang luas untuk dilatih. Selain itu, pengembangan perangkat keras seperti GPU dan TPU telah mempercepat proses pelatihan model, memungkinkan peneliti dan insinyur untuk mengeksplorasi arsitektur jaringan saraf yang lebih kompleks.</p>",
            'image_link' => 'https://assets-a1.kompasiana.com/items/album/2024/07/28/blog-mengenal-deep-learning-lebih-jelas-66a64974c925c42d6b0a00b2.jpg',
            'writer_id' => $dataScience->writer
                ->shuffle()
                ->first()
                ->id,
            'category_id' => $dataScience->id,
        ]);

        Article::factory()->create([
            'title' => 'Natural Language Processing',
            'body' => "<p>Natural Language Processing atau Pemrosesan Bahasa Alami (NLP) adalah cabang dari kecerdasan buatan (AI) yang memungkinkan komputer untuk memahami, menginterpretasikan, dan memproses bahasa manusia. NLP memungkinkan komputer untuk bekerja dengan teks atau suara dalam bahasa alami, seperti Bahasa Indonesia, untuk melakukan tugas-tugas tertentu seperti penerjemahan, analisis sentimen, atau pengenalan suara.</p><br><p>Pemrosesan Bahasa Alami sangat bermanfaat di Indonesia, terutama dalam meningkatkan layanan pelanggan, memperluas akses informasi, dan mendukung riset bahasa lokal. NLP membantu bisnis untuk lebih memahami kebutuhan dan perilaku pelanggan, sementara juga mendukung pemerintah dan organisasi dalam mengelola informasi dalam jumlah besar.</p>",
            'image_link' => 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2021/08/18/hand-businessman-touching-hologr-20210818081844.jpg',
            'writer_id' => $dataScience->writer
                ->shuffle()
                ->first()
                ->id,
            'category_id' => $dataScience->id,
        ]);

        Article::factory()->create([
            'title' => 'Software Security',
            'body' => "<p>Keamanan perangkat lunak adalah praktik dan teknologi yang dirancang untuk melindungi perangkat lunak dari serangan siber, peretasan, dan kerusakan yang disebabkan oleh pihak yang tidak bertanggung jawab. Dalam keamanan perangkat lunak, fokus utama adalah memastikan bahwa sistem, aplikasi, dan data yang digunakan tetap aman dan terlindungi dari ancaman eksternal maupun internal.</p><br><p>Di era digital ini, perangkat lunak menjadi bagian penting dalam berbagai sektor di Indonesia, seperti perbankan, e-commerce, kesehatan, dan pemerintahan. Dengan berkembangnya teknologi, ancaman keamanan siber juga semakin meningkat. Serangan siber, seperti peretasan data atau pencurian identitas, dapat berdampak besar pada bisnis dan kepercayaan publik. Oleh karena itu, keamanan perangkat lunak sangat penting untuk melindungi data dan privasi pengguna serta menjaga stabilitas operasional bisnis.</p>",
            'image_link' => 'https://www.techopedia.com/wp-content/uploads/2011/07/Software-Security.jpg',
            'writer_id' => $networkSecurity->writer
                ->shuffle()
                ->first()
                ->id,
            'category_id' => $networkSecurity->id,
        ]);

        Article::factory()->create([
            'title' => 'Network Administration',
            'body' => "<p>Administrasi jaringan adalah bidang yang mencakup pengelolaan, pemeliharaan, dan pengawasan infrastruktur jaringan komputer. Seorang administrator jaringan bertanggung jawab untuk memastikan bahwa semua perangkat dalam jaringan, seperti router, switch, server, dan perangkat endpoint (misalnya, komputer atau ponsel) berfungsi dengan baik dan saling terhubung dengan aman dan efisien.</p><br><p>Di Indonesia, dengan semakin berkembangnya transformasi digital, jaringan komputer menjadi tulang punggung bagi perusahaan, sekolah, pemerintah, dan organisasi lainnya. Administrasi jaringan yang efektif sangat penting untuk menjaga keberlanjutan operasional, terutama bagi organisasi yang bergantung pada jaringan untuk komunikasi, penyimpanan data, dan transaksi bisnis. Selain itu, administrasi jaringan yang baik membantu mencegah gangguan, meningkatkan efisiensi, dan melindungi data dari ancaman siber.</p>",
            'image_link' => 'https://idcloudhost.com/wp-content/uploads/2019/08/Network-Administrator-min-scaled.jpg',
            'writer_id' => $networkSecurity->writer
                ->shuffle()
                ->first()
                ->id,
            'category_id' => $networkSecurity->id,
        ]);

        Article::factory()->create([
            'title' => 'Popular Network Technology',
            'body' => "<p>Wi-Fi memungkinkan perangkat terhubung ke internet tanpa menggunakan kabel. Ini adalah salah satu teknologi yang paling banyak digunakan, baik di rumah, kantor, maupun tempat umum. Dengan versi terbaru seperti Wi-Fi 6 dan Wi-Fi 6E, Wi-Fi menawarkan kecepatan lebih tinggi, kapasitas jaringan yang lebih besar, dan efisiensi daya yang lebih baik.</p><br><p>5G adalah generasi terbaru dari jaringan seluler, yang menawarkan kecepatan internet yang jauh lebih tinggi, latensi rendah, dan kapasitas yang lebih besar dibandingkan dengan 4G. Di Indonesia, 5G mulai diluncurkan di beberapa kota besar dan diprediksi akan membuka peluang besar untuk Internet of Things (IoT), mobil otonom, dan aplikasi realitas virtual (VR) serta augmented reality (AR).</p>",
            'image_link' => 'https://collectionperformance.com/wp-content/uploads/2023/12/top-10-networking-technology-1.jpg',
            'writer_id' => $networkSecurity->writer
                ->shuffle()
                ->first()
                ->id,
            'category_id' => $networkSecurity->id,
        ]);
    }
}
