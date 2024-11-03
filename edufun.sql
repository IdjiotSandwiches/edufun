-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 03:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edufun`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `writer_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `image_link`, `writer_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Machine Learning', '<p>Machine Learning atau Pembelajaran Mesin adalah cabang dari kecerdasan buatan (Artificial Intelligence) yang memungkinkan komputer untuk belajar dari data tanpa harus diprogram secara eksplisit. Dalam machine learning, komputer menggunakan algoritma untuk mengenali pola, membuat prediksi, dan mengambil keputusan berdasarkan data yang ada. Dengan kata lain, machine learning memungkinkan komputer untuk \"belajar\" dari pengalaman seperti manusia.</p><br><p>Pembelajaran mesin bekerja dengan cara melatih model komputer menggunakan sejumlah data sebagai contoh. Model ini mempelajari pola atau karakteristik dari data tersebut, dan setelah dilatih, model ini dapat digunakan untuk memprediksi hasil atau pengambilan keputusan dari data baru. Misalnya, dalam pengenalan gambar, machine learning dapat digunakan untuk melatih komputer mengenali wajah seseorang atau mengidentifikasi objek dalam foto.</p>', 'https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/Blog-Blog-19-Agustus-Apa-itu-Machine-Learning-Beserta-Pengertian-dan-Cara-Kerjanya.png', 3, 1, '2024-11-02 05:20:19', '2024-11-02 05:20:19'),
(2, 'Deep Learning', '<p>Deep learning adalah salah satu cabang dari pembelajaran mesin yang berfokus pada penggunaan jaringan saraf tiruan untuk memproses dan menganalisis data. Berbeda dengan metode tradisional, deep learning mampu menangani data dalam jumlah besar dan kompleks dengan tingkat akurasi yang tinggi. Teknologi ini telah menjadi dasar bagi berbagai inovasi modern, mulai dari pengenalan suara hingga kendaraan otonom.</p><br><p>Keberhasilan deep learning sebagian besar didorong oleh kemajuan dalam komputasi dan ketersediaan data dalam jumlah besar. Model deep learning memerlukan daya komputasi yang tinggi dan dataset yang luas untuk dilatih. Selain itu, pengembangan perangkat keras seperti GPU dan TPU telah mempercepat proses pelatihan model, memungkinkan peneliti dan insinyur untuk mengeksplorasi arsitektur jaringan saraf yang lebih kompleks.</p>', 'https://assets-a1.kompasiana.com/items/album/2024/07/28/blog-mengenal-deep-learning-lebih-jelas-66a64974c925c42d6b0a00b2.jpg', 3, 1, '2024-11-02 05:20:19', '2024-11-02 05:20:19'),
(3, 'Natural Language Processing', '<p>Natural Language Processing atau Pemrosesan Bahasa Alami (NLP) adalah cabang dari kecerdasan buatan (AI) yang memungkinkan komputer untuk memahami, menginterpretasikan, dan memproses bahasa manusia. NLP memungkinkan komputer untuk bekerja dengan teks atau suara dalam bahasa alami, seperti Bahasa Indonesia, untuk melakukan tugas-tugas tertentu seperti penerjemahan, analisis sentimen, atau pengenalan suara.</p><br><p>Pemrosesan Bahasa Alami sangat bermanfaat di Indonesia, terutama dalam meningkatkan layanan pelanggan, memperluas akses informasi, dan mendukung riset bahasa lokal. NLP membantu bisnis untuk lebih memahami kebutuhan dan perilaku pelanggan, sementara juga mendukung pemerintah dan organisasi dalam mengelola informasi dalam jumlah besar.</p>', 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2021/08/18/hand-businessman-touching-hologr-20210818081844.jpg', 3, 1, '2024-11-02 05:20:19', '2024-11-02 05:20:19'),
(4, 'Software Security', '<p>Keamanan perangkat lunak adalah praktik dan teknologi yang dirancang untuk melindungi perangkat lunak dari serangan siber, peretasan, dan kerusakan yang disebabkan oleh pihak yang tidak bertanggung jawab. Dalam keamanan perangkat lunak, fokus utama adalah memastikan bahwa sistem, aplikasi, dan data yang digunakan tetap aman dan terlindungi dari ancaman eksternal maupun internal.</p><br><p>Di era digital ini, perangkat lunak menjadi bagian penting dalam berbagai sektor di Indonesia, seperti perbankan, e-commerce, kesehatan, dan pemerintahan. Dengan berkembangnya teknologi, ancaman keamanan siber juga semakin meningkat. Serangan siber, seperti peretasan data atau pencurian identitas, dapat berdampak besar pada bisnis dan kepercayaan publik. Oleh karena itu, keamanan perangkat lunak sangat penting untuk melindungi data dan privasi pengguna serta menjaga stabilitas operasional bisnis.</p>', 'https://www.techopedia.com/wp-content/uploads/2011/07/Software-Security.jpg', 2, 2, '2024-11-02 05:20:19', '2024-11-02 05:20:19'),
(5, 'Network Administration', '<p>Administrasi jaringan adalah bidang yang mencakup pengelolaan, pemeliharaan, dan pengawasan infrastruktur jaringan komputer. Seorang administrator jaringan bertanggung jawab untuk memastikan bahwa semua perangkat dalam jaringan, seperti router, switch, server, dan perangkat endpoint (misalnya, komputer atau ponsel) berfungsi dengan baik dan saling terhubung dengan aman dan efisien.</p><br><p>Di Indonesia, dengan semakin berkembangnya transformasi digital, jaringan komputer menjadi tulang punggung bagi perusahaan, sekolah, pemerintah, dan organisasi lainnya. Administrasi jaringan yang efektif sangat penting untuk menjaga keberlanjutan operasional, terutama bagi organisasi yang bergantung pada jaringan untuk komunikasi, penyimpanan data, dan transaksi bisnis. Selain itu, administrasi jaringan yang baik membantu mencegah gangguan, meningkatkan efisiensi, dan melindungi data dari ancaman siber.</p>', 'https://idcloudhost.com/wp-content/uploads/2019/08/Network-Administrator-min-scaled.jpg', 1, 2, '2024-11-02 05:20:19', '2024-11-02 05:20:19'),
(6, 'Popular Network Technology', '<p>Wi-Fi memungkinkan perangkat terhubung ke internet tanpa menggunakan kabel. Ini adalah salah satu teknologi yang paling banyak digunakan, baik di rumah, kantor, maupun tempat umum. Dengan versi terbaru seperti Wi-Fi 6 dan Wi-Fi 6E, Wi-Fi menawarkan kecepatan lebih tinggi, kapasitas jaringan yang lebih besar, dan efisiensi daya yang lebih baik.</p><br><p>5G adalah generasi terbaru dari jaringan seluler, yang menawarkan kecepatan internet yang jauh lebih tinggi, latensi rendah, dan kapasitas yang lebih besar dibandingkan dengan 4G. Di Indonesia, 5G mulai diluncurkan di beberapa kota besar dan diprediksi akan membuka peluang besar untuk Internet of Things (IoT), mobil otonom, dan aplikasi realitas virtual (VR) serta augmented reality (AR).</p>', 'https://collectionperformance.com/wp-content/uploads/2023/12/top-10-networking-technology-1.jpg', 1, 2, '2024-11-02 05:20:19', '2024-11-02 05:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Data Science', '2024-11-02 05:20:19', '2024-11-02 05:20:19'),
(2, 'Network Security', '2024-11-02 05:20:19', '2024-11-02 05:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_31_140143_create_categories_table', 1),
(6, '2024_11_30_140130_create_writers_table', 1),
(7, '2024_11_31_140118_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialize` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `name`, `specialize`, `category_id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Saadat Januar', 'Specialisasi Network Security', 2, '/img/avatar.jpg', '2024-11-02 05:20:19', '2024-11-02 05:20:19'),
(2, 'Anita Aryani', 'Specialisasi Network Security', 2, '/img/avatar.jpg', '2024-11-02 05:20:19', '2024-11-02 05:20:19'),
(3, 'Olivia Andriani S.Kom', 'Specialisasi Data Science', 1, '/img/avatar.jpg', '2024-11-02 05:20:19', '2024-11-02 05:20:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_title_unique` (`title`),
  ADD KEY `articles_writer_id_foreign` (`writer_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `writers_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `writers`
--
ALTER TABLE `writers`
  ADD CONSTRAINT `writers_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
