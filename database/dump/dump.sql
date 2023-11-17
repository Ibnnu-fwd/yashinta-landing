-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table yashinta.aspiration: ~0 rows (approximately)
DELETE FROM `aspiration`;

-- Dumping data for table yashinta.commitment: ~3 rows (approximately)
DELETE FROM `commitment`;
INSERT INTO `commitment` (`id`, `title`, `slug`, `content`, `thumbnail`, `created_at`, `updated_at`) VALUES
	(5, 'Harapan Ibu Dan Anak Yogyakarta', 'harapan-ibu-dan-anak-yogyakarta-6556d9b3d434e', '<p>Masalah lain yang Didin pikirkan saat itu mengacu pada kebutuhan Fian seiring tumbuh kembangnya. Saat bayi, dia membutuhkan akses kesehatan. Menjelang kanak-kanak, dia butuh akses pendidikan. Semakin besar, rupanya Fian membutuhkan akses pendidikan.</p><p>&nbsp;</p><p>Dia pun berkaca bahwa anak-anak lain di jalanan pun memiliki kebutuhan yang kompleks dan tidak sebatas akses pendidikan semata. Didin pun mengumpulkan teman-temannya untuk membuat gerakan baru yang memiliki spektrum yang lebih luas mengenai kompleksitas masalah di komunitas jalanan.</p><p>&nbsp;</p><p>"Kami sudah serius berkegiatan sejak 2018, tetapi resminya baru awal 2020 lalu. Ada empat isu yang kami fokuskan, yaitu isu identitas, kesehatan, pendidikan alternatif, serta ekonomi alternatif," ujar Didin.</p><p>&nbsp;</p><p>Jika awalnya dia fokus pada sasaran anak-anak, maka kini dia pun memperluas target sasaran. Sebab, menurut Didin, peran orang-orang di sekitar anak jalanan pun sangat penting, seperti orang tua, anggota keluarga yang lain, serta teman bermain.</p>', '6556d9b2b9bcd.jpg', '2023-11-15 21:24:48', '2023-11-16 20:10:43'),
	(6, 'Masa Depan Anak Muda Yogyakarta', 'masa-depan-anak-muda-yogyakarta', '<p>Sebuah kalimat yang menggambarkan harapan dan prospek yang cerah bagi generasi muda di Yogyakarta. Yogyakarta, yang dikenal sebagai kota pelajar dan budaya, memiliki banyak peluang bagi anak muda untuk tumbuh dan berkembang.&nbsp;</p><p>&nbsp;</p><p>Dengan pendidikan yang baik, akses ke teknologi, dan dukungan dari komunitas, masa depan anak muda Yogyakarta tampaknya penuh dengan peluang. Mereka adalah pemimpin masa depan yang akan membawa perubahan positif bagi kota dan negara mereka. Dengan semangat dan determinasi, mereka akan membentuk masa depan yang lebih baik dan lebih cerah untuk semua orang.</p>', '6556d9fd3663e.jpg', '2023-11-16 20:11:59', '2023-11-16 20:11:59'),
	(7, 'Yogyakarta Nyaman & Lestari', 'yogyakarta-nyaman--lestari', '<p>Sebuah kalimat yang menggambarkan Yogyakarta sebagai kota yang nyaman dan aman untuk tinggal. Yogyakarta, dengan budaya yang kaya, penduduk yang ramah, dan lingkungan yang aman, menjadi tempat yang ideal untuk belajar, bekerja, dan hidup.&nbsp;</p><p>&nbsp;</p><p>Dengan infrastruktur yang baik, sistem pendidikan yang kuat, dan kebijakan pemerintah yang mendukung, Yogyakarta terus berusaha untuk menjadi kota yang lebih nyaman dan aman bagi semua penduduknya. Ini adalah komitmen Yogyakarta untuk menciptakan lingkungan yang harmonis dan damai bagi semua orang.</p>', '6556da3ac2beb.jpg', '2023-11-16 20:12:58', '2023-11-16 20:12:58');

-- Dumping data for table yashinta.educations: ~1 rows (approximately)
DELETE FROM `educations`;
INSERT INTO `educations` (`id`, `university_name`, `study`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
	(1, 'Universitas Gajah Mada', 'S1 Manajemen', '2019-11-16', '2023-11-16', NULL, NULL);

-- Dumping data for table yashinta.experiences: ~1 rows (approximately)
DELETE FROM `experiences`;
INSERT INTO `experiences` (`id`, `company_name`, `position`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
	(1, 'NaZMa Office', 'Full Stack Web', '2012-11-16', '2023-11-16', NULL, NULL);

-- Dumping data for table yashinta.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping data for table yashinta.faq: ~3 rows (approximately)
DELETE FROM `faq`;
INSERT INTO `faq` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
	(1, 'Siapa Yashinta Sekarwangi?', '<p><a href="https://www.detik.com/jateng/jogja/d-6718686/yashinta-putri-politikus-pdip-aria-bima-daftar-calon-dpd-di-kpu-diy">RA Yashinta Sekarwangi Mega, yang akrab dipanggil Sekarwangi, adalah putri dari politikus senior PDIP Aria Bima</a>. <a href="https://www.detik.com/jateng/jogja/d-6718686/yashinta-putri-politikus-pdip-aria-bima-daftar-calon-dpd-di-kpu-diy">Dia mendaftar sebagai calon anggota Dewan Perwakilan Daerah (DPD) RI di KPU Daerah Istimewa Yogyakarta (DIY)1</a>. <a href="https://www.detik.com/jateng/jogja/d-6718686/yashinta-putri-politikus-pdip-aria-bima-daftar-calon-dpd-di-kpu-diy">Yashinta memutuskan terjun ke politik karena ingin berkontribusi lebih untuk daerah</a></p>', '2023-11-16 08:09:28', '2023-11-16 08:09:28'),
	(2, 'Kapan Yashinta Sekarwangi Mega Mendaftar?', '<p>Yashinta Sekarwangi Mega mendaftar sebagai calon anggota Dewan Perwakilan Daerah (DPD) RI di KPU Daerah Istimewa Yogyakarta (DIY) pada tanggal <strong>27 Desember 2022</strong>.</p>', '2023-11-16 08:10:24', '2023-11-16 08:10:24'),
	(3, 'Apakah Yashinta Sekarwangi Lolos Tahap Verifikasi Faktual?', '<p>Ya, berkas dukungan Yashinta Sekarwangi Mega sebagai bakal calon anggota DPD RI Dapil DIY telah <strong>lolos verifikasi faktual</strong> pada tanggal <strong>1 Maret 2023</strong>.</p>', '2023-11-16 08:11:05', '2023-11-16 08:11:05');

-- Dumping data for table yashinta.gallery: ~3 rows (approximately)
DELETE FROM `gallery`;
INSERT INTO `gallery` (`id`, `title`, `thumbnail`, `date`, `created_at`, `updated_at`) VALUES
	(1, 'Foto 1', '65561c114f990.jpg', '2023-11-16', '2023-11-16 06:41:37', '2023-11-16 06:41:37'),
	(2, 'Foto 2', '65561c231c2f3.jpg', '2023-11-17', '2023-11-16 06:41:55', '2023-11-16 06:41:55'),
	(3, 'Foto 3', '65561c31dde74.jpg', '2023-11-18', '2023-11-16 06:42:09', '2023-11-16 06:42:09');

-- Dumping data for table yashinta.migrations: ~17 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_15_022833_create_profile_table', 2),
	(6, '2023_11_15_033140_create_educations_table', 2),
	(7, '2023_11_15_033304_create_experiences_table', 2),
	(8, '2023_11_15_033333_create_organizations_table', 2),
	(9, '2023_11_15_033854_create_social_activities_table', 2),
	(10, '2023_11_15_034220_create_commitment_table', 2),
	(11, '2023_11_15_035118_create_faq_table', 2),
	(12, '2023_11_15_035154_create_news_table', 2),
	(13, '2023_11_15_035310_create_gallery_table', 2),
	(14, '2023_11_15_035405_create_social_media_table', 2),
	(15, '2023_11_16_060942_create_aspiration_table', 3),
	(16, '2023_11_16_061708_add_photo_profile_landing_profile', 3),
	(17, '2023_11_16_133529_add_video_link_profile', 3);

-- Dumping data for table yashinta.news: ~2 rows (approximately)
DELETE FROM `news`;
INSERT INTO `news` (`id`, `title`, `slug`, `content`, `thumbnail`, `author`, `published_date`, `created_at`, `updated_at`) VALUES
	(1, 'Seorang Anak Muda Serahkan Bukti Dukungan Calon DPD RI Ke KPU DIY, Siapa Dia?', 'seorang-anak-muda-serahkan-bukti-dukungan-calon-dpd-ri-ke-kpu-diy-siapa-dia', '<p>Pendaftaran Bakal Calon Anggota <a href="https://jogja.tribunnews.com/tag/dpd-ri">DPD&nbsp;RI</a> telah dibuka.</p><p>&nbsp;</p><p>Bakal calon pun mulai menyerahkan bukti dukungan ke KPUD DIY.</p><p>&nbsp;</p><p>Ini seperti pada Selasa (27/12/2022), seorang Bakal Calon Anggota <a href="https://jogja.tribunnews.com/tag/dpd-ri">DPD&nbsp;RI</a> untuk Daerah Pemilihan DIY menyerahkan bukti dukungan ke <a href="https://jogja.tribunnews.com/tag/kpu-diy">KPU&nbsp;DIY</a>.</p><p>&nbsp;</p><p>Dia adalah RA Yashinta Sekarwangi Mega, yang mengantar dan menyerahkan persyaratan dukungan calon perseorangan <a href="https://jogja.tribunnews.com/tag/dpd-ri">DPD&nbsp;RI</a> ke <a href="https://jogja.tribunnews.com/tag/kpu-diy">KPU&nbsp;DIY</a>, didampingi timnya.</p><p>&nbsp;</p><p>"Kami hadir untuk memenuhi proses tahapan yang berlangsung sesuai dengan peraturan KPU", ujar Sekar.</p><p>&nbsp;</p><p>Sekarwangi tergerak untuk mencalonkan diri sebagai calon <a href="https://jogja.tribunnews.com/tag/dpd-ri">DPD&nbsp;RI</a> sebagai representasi generasi muda yang peduli akan persoalan daerah khususnya Daerah Istimewa Yogyakarta untuk terus diperjuangkan di tingkat nasional melalui <a href="https://jogja.tribunnews.com/tag/dpd-ri">DPD&nbsp;RI</a>.</p><p>&nbsp;</p><p>Sekarwangi yang merupakan alumni Hubungan Internasional UGM saat ini sedang menempuh S2 di Universitas Indonesia dengan mengambil jurusan Ilmu Komunikasi.</p><p>&nbsp;</p><p>Kehadiran dilakukan secara langsung oleh Mbak Sekarwangi bersama tim ke <a href="https://jogja.tribunnews.com/tag/kpu-diy">KPU&nbsp;DIY</a> sekaligus menginformasikan kepada segenap warga masyarakat DIY terutama yang telah memberikan dukungan.</p><p>&nbsp;</p><p>Ia mengucapkan terima kasih dan semoga agenda lima tahunan pemilu bisa berjalan lancar dan sukses berlandaskan asas jujur dan adil.</p>', '65561e8537815.jpg', 'Ribut Raharjo', '2023-11-16', '2023-11-16 06:52:05', '2023-11-16 07:00:03'),
	(2, 'Yashinta Sekarwangi Mega, Balon Anggota DPD Yang Ingin Berkontribusi Untuk DIY', 'yashinta-sekarwangi-mega-balon-anggota-dpd-yang-ingin-berkontribusi-untuk-diy', '<p>Bakal calon (Balon) anggota Dewan Perwakilan Daerah (DPD) DPD RA. Yashinta Sekarwangi Mega mengaku lega dinyatakan lolos dalam verifikasi faktual kesatu oleh Komisi Pemilihan Umum (KPU) DIY. Setelah itu, Yashinta Sekarwangi Mega akan mempersiapkan diri untuk tahap selanjutnya sebagai calon DPD.</p><p>&nbsp;</p><p>Yashinta Sekarwangi Mega akhir-akhir ini menjadi perbincangan di masyarakat terkait keberaniannya untuk maju menjadi anggota DPD mewakili DIY. Yashinta Sekarwangi Mega menjadi sosok anak muda yang ingin mengabdi dan memperjuangkan kepentingan warga DIY di jalur DPD untuk periode 2024-2029.</p><p>&nbsp;</p><p>Bila dibandingkan dengan bakal calon DPD lainnya, Yashinta Sekarwangi Mega terbilang masih sangat muda. Beberapa tahun lalu dia baru saja menyelesaikan kuliah di Jurusan Hubungan Internasional, UGM. Saat ini, Yashinta Sekarwangi Mega melanjutkan S2 di Universitas Indonesia jurusan Ilmu Komunikasi.</p><p>&nbsp;</p><p>Dia tergerak untuk maju ke tingkat nasional sebagai wakil DIY di DPD karena berawal dari kepedulian pada persoalan sosial masyarakat yang harus diperjuangkan. Menurut dia, sebagai generasi muda, banyak hal yang bisa diperjuangkan di level nasional. Harapannya, banyak kepentingan dan aspirasi warga DIY bisa sampai ke pemerintah pusat.</p><p>&nbsp;</p><p>“Di ajang pencalonan perseorangan anggota DPD, saat ini sampai pada tahap verifikasi faktual. Pada Rabu, 1 Maret 2023 sudah dinyatakan lolos pada tahap verifikasi faktual dengan perolehan dukungan yang memenuhi syarat sebanyak 2.240 pendukung, dari syarat minimal dukungan 2.000 pendukung,” ujar dia, Jumat (3/3/2023)</p><p>&nbsp;</p><p>Selanjutnya Yashinta Sekarwangi akan melaju ke tahap berikutnya. “Lolosnya tahap verfikasi faktual ini menjadi salah satu tahapan yang sudah dilaksanakan dan mempertegas bahwa saya harus lebih menyiapkan diri sebagai calon perwakilan daerah," ungkap dia.</p>', '655621c43e08d.jpg', 'Budi Cahyana', '2023-11-16', '2023-11-16 07:05:56', '2023-11-16 07:05:56');

-- Dumping data for table yashinta.organizations: ~1 rows (approximately)
DELETE FROM `organizations`;
INSERT INTO `organizations` (`id`, `name`, `position`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
	(1, 'OSIS', 'Ketua', '2011-11-16', '2023-11-16', NULL, NULL);

-- Dumping data for table yashinta.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping data for table yashinta.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping data for table yashinta.profile: ~1 rows (approximately)
DELETE FROM `profile`;
INSERT INTO `profile` (`id`, `name`, `title_landing_page`, `title_profile_page`, `description_landing_page`, `description_profile_page`, `photo_landing_page`, `photo_profile_page`, `photo_faq_page`, `photo_socmed`, `photo_educations`, `photo_experiences`, `photo_organizations`, `photo_social_activities`, `created_at`, `updated_at`, `photo_profile_on_landing`, `video_link`) VALUES
	(1, 'R.A Yashinta Sekarwangi Mega', 'Calon DPD RI Dapil DIY', 'R.A Yashinta Sekarwangi Mega Adalah Cicit dari Sri Sultan Hamengkubuwono ke-VIII', 'Yashinta Sekarwangi merupakan mahasiswa S2 Universitas Indonesia jurusan Ilmu Komunikasi. Sebelumnya, ia sudah berhasil menuntaskan pendidikan di Hubungan Internasional UGM dan akhirnya melanjutkan pendidikan di UI', 'Yashinta Sekarwangi merupakan mahasiswa S2 Universitas Indonesia jurusan Ilmu Komunikasi. Sebelumnya, ia sudah berhasil menuntaskan pendidikan di Hubungan Internasional UGM dan akhirnya melanjutkan pendidikan di UI', '65557ef30bbfd.png', '65557f9ad21ef.png', '65557f8a0598c.png', '65557f818748b.png', '655582afe9815.jpg', '655581f93506b.jpg', '655582b23feb6.jpg', '6555832572917.jpg', '2023-11-15 06:37:55', '2023-11-16 07:57:08', '65562dc4d96cd.png', 'https://www.youtube.com/watch?v=mV6d4800hiU&ab_channel=R.A.YashintaSekarwangiMega');

-- Dumping data for table yashinta.social_activities: ~1 rows (approximately)
DELETE FROM `social_activities`;
INSERT INTO `social_activities` (`id`, `name`, `description`, `date`, `created_at`, `updated_at`) VALUES
	(1, 'Sosial 1', 'Membantu ibu ibu masak', '2023-11-16', NULL, NULL);

-- Dumping data for table yashinta.social_media: ~5 rows (approximately)
DELETE FROM `social_media`;
INSERT INTO `social_media` (`id`, `name`, `icon`, `link`, `username`, `created_at`, `updated_at`) VALUES
	(1, 'Instagram', '655624e1e4dc2.svg', 'https://www.instagram.com/y.sekarwangi/?hl=en', 'y.sekarwangi', '2023-11-16 07:19:13', '2023-11-16 07:19:13'),
	(2, 'Instagram', '6556250ae23b6.svg', 'https://www.instagram.com/yashinta.istimewa/?hl=en', 'Yashinta.Istimewa', '2023-11-16 07:19:54', '2023-11-16 07:19:54'),
	(3, 'Youtube', '65562559e9956.svg', 'https://www.youtube.com/@YashintaSekarwangiDIY', 'YashintaSekarwangiDIY', '2023-11-16 07:21:13', '2023-11-16 07:21:13'),
	(6, 'Tiktok', '65562663a8d4f.svg', 'https://www.tiktok.com/@y.sekarwangi', 'R.A. Yashinta Sekarwangi', '2023-11-16 07:25:39', '2023-11-16 07:25:39'),
	(7, 'Facebook', '6556267727953.svg', 'https://www.facebook.com/YashintaSekarwangiMega', 'Yashinta Sekarwangi', '2023-11-16 07:25:59', '2023-11-16 07:25:59');

-- Dumping data for table yashinta.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'admin@mail.com', NULL, '$2y$10$tcZ.lmwif37Fyvft1lIYEOs34n2GmDgSmFOAeiUIQEh4zr.2mFz8S', NULL, '2023-11-15 06:36:03', '2023-11-15 06:36:03');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
